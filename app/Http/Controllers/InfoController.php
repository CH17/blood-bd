<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BloodInfo;
use App\User;

class InfoController extends Controller
{
    
    public function getHospitalData(Request $request){

        if($query = $request->get('query')){

            $suggestions = $this->GetHopitalbyAPI($query);            
           
            return response([
                'success' => true,
                'code' => 200,
                'data' => json_encode($suggestions),
            ]);

        }else{
            return response([
                'success' => false,
                'code' => 404,
            ]);
        }

        
    }


    public function GetHopitalbyAPI($query){
        
        $google_api_key = 'AIzaSyAc0Mb5-8IbJL2J-6v549sEEg5QZc6Kmxk';
        $query = "hospitals+in+".$query;
        $url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=".$query."&key=".$google_api_key;
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url);
            
            $response = json_decode($response->getBody(), true);

            $suggs = array();

            if(count($response['results'])){
                foreach($response['results'] as $result){

                    $suggs[] = array(
                        'lat' => $result['geometry']['location']['lat'],
                        'lng' => $result['geometry']['location']['lng'],
                        'name' => $result['name'],

                    );                   
                }
            }
            
        return $suggs;            

    }


    public function searchResult( Request $request){
        $blood_group        = $request->get('blood_group');
        $hospital           = $request->get('hospital');
        $location           = explode(',', $hospital);

        $circle_radius = 3959;
        $max_distance = 60;
        $lat = $location[0] ;
        $lng = $location[1];

         $results = \DB::select(
               'SELECT * FROM
                    (SELECT id, user_id, blood_group, latitude, longtitude, (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
                    cos(radians(longtitude) - radians(' . $lng . ')) +
                    sin(radians(' . $lat . ')) * sin(radians(latitude))))
                    AS distance
                    FROM blood_infos) AS distances
                    WHERE distance < ' . $max_distance . ' 
                    AND blood_group LIKE "'.$blood_group.'"
                    ORDER BY distance LIMIT 40;
                '); 

        $donors = array();    


        if($results){
            foreach($results as $result){

                $user = \App\User::find($result->user_id);
                
                if($user){

                        $donors[] = array(
                            'name' => $user->name,
                            'email' => $user->email,
                            'phone' => $user->phone,
                            'address' => $user->address,
                            'city' => $user->city,
                            'division' => $user->division,
                            'distance' => number_format($result->distance, 2, '.', ''),
                        );

                }               
            }
        }
              
        $data['result'] = $donors;
        $data['blood'] = $blood_group;
        return view('search', $data);
    
    }
}
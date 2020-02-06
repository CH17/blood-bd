<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\BloodInfo;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class UserController extends Controller
{
    

    public function signin()
    {
        return view('signin');
    }


     public function createUser(Request $request)
    {   
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'city' => 'required',
            'address' => 'required',
            'division' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('signin')
                        ->withErrors($validator)
                        ->withInput();
        }else{

                $user = new User;
                $user->name = $request->name;                
                $user->email = $request->email;
                $user->password = \Hash::make($request->password);
                $user->phone = $request->phone;
                $user->city = $request->city;
                $user->address = $request->address;
                $user->division = $request->division;
                
                $user->save();

                $info = new BloodInfo;
                $info->user_id = $user->id;
                $info->blood_group = $request->blood_gr; 

                $address = urlencode($user->address.','.$user->city.','.$user->division);
                $location = $this->GRequest($address);
                $info->latitude = $location['lat'];
                $info->longtitude = $location['lng'];
                $info->save();

            return redirect('/');
        }
    }



    public function GRequest($address){
        
      //  $google_api_key = env('GOOGLE_API_KEY', false);
               
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url);
            
            $response = json_decode($response->getBody(), true);

            $location = array();
            
            $location['lat'] = $response['results'][0]['geometry']['location']['lat'];
            $location['lng'] = $response['results'][0]['geometry']['location']['lng'];
            return $location;

    }

}


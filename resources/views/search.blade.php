@extends('layouts.master')

@section('content')
   
   <div class="signin-content">        
    <div class="container">
      <div class="row">

            <div class="searchresult minbody">

                @if(count($result))
                    
                    <p>You nearest Donor(s) with {{$blood}} Blood Group</p>  

                    <table id="search_result" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Distance (km)</th>                            
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Distance (km)</th> 
                            </tr>
                        </tfoot>
                        <tbody>  

                            @foreach($result as $key=>$r)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $r['name'] }}</td>
                                    <td>{{ $r['address'] }}, {{ $r['city'] }}, {{ $r['division'] }}</td>
                                    <td>{{ $r['phone'] }}</td>
                                    <td>{{ $r['email'] }}</td>
                                    <td>{{ $r['distance'] }}</td>
                                </tr>
                            @endforeach                  
                            
                        </tbody>
                    </table>

                @else

                    <h3>Sorry, no result found.</h3>

                @endif              
            
            </div>

       
       </div>
    </div>  
   </div>   
		

@endsection
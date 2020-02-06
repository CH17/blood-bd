@extends('layouts.master')

@section('content')
   
   <div class="signin-content">
		<div class="form-coll">
        
     <div class="container">
      <div class="row">
        <div class="col-md-4 borderline">
        <div class="login">
          <h2 class="text-center">Login</h2>
          <hr>
            <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-12 control-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-12 control-label">Password</label>
                  <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-1 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group submit">
                  <div class="col-sm-offset-1 col-sm-12">
                    <button type="submit" class="btn">Submit</button>
                  </div>
                </div>
              </form>
        </div>
          
        </div> 

        <div class="col-md-8">
        <div class="register">
           <h2 class="text-center">Become a Donor</h2>
           <hr>

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{url('signin')}}">

               <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name" class="col-sm-12 control-label">Full Name</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                      </div>
                    </div>
                  </div>  
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="blood_gr" class="col-sm-12 control-label">Blood Group</label>
                      <div class="col-sm-12">
                        <select class="form-control" name="blood_gr">
                          <option value="A+">A+</option>
                          <option value="AB+">AB+</option>
                          <option value="B+">B+</option>
                          <option value="O+">O+</option>
                          <option value="A-">A-</option>
                          <option value="AB-">AB-</option>
                          <option value="B-">B-</option>
                          <option value="O-">O-</option>
                        </select>
                      </div>
                    </div>
                  </div> 
                 </div>  

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone" class="col-sm-12 control-label">Phone Number</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="phone"  name="phone" placeholder="Phone Number">
                      </div>
                    </div>
                  </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="col-sm-12 control-label">Email</label>
                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    </div>
                  </div>
                </div>  
               </div>  

				        <div class="form-group">
                  <label for="address" class="col-sm-12 control-label">Street Address</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="city" class="col-sm-12 control-label">City/Upazilla</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="city" name="city" placeholder="Location">
                      </div>
                    </div>
                </div>  

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="division" class="col-sm-12 control-label">Division</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="division" name='division' placeholder="Division">
                    </div>
                  </div>
                </div> 
              </div> 

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password" class="col-sm-12 control-label">Password</label>
                      <div class="col-sm-12">
                        <input type="password" class="form-control" id="password" name='password' placeholder="Password">
                      </div>
                    </div>
                  </div> 

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="password_confirmation" class="col-sm-12 control-label">Confirm Password</label>
                    <div class="col-sm-12">
                      <input type="password" class="form-control"  id="password_confirmation" name='password_confirmation'  placeholder="Confirm Password">
                    </div>
                  </div>
                </div> 
              </div> 
                
                <div class="form-group submit">
                  <div class="col-sm-offset-1 col-sm-12">
				  	        {{ csrf_field() }}
                    <button type="submit" class="btn">Submit</button>
                  </div>
                </div>
              </form>
        </div>
         
        </div>  
      </div>
       </div>
</div>  
   </div>   
		

@endsection
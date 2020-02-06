@extends('layouts.master')

@section('content')


			<!-- banner -->
			<div class="banner">
				<div class="container">
					<div class="banner-content">
						<div class="row">
							
								<div class="col-md-5">
									<div class="row">
										<div class="col-md-8">
											<div class="banner-logo">
											   <img class="img-fluid" src="assets/img/become-a-hero.png" alt="">
											</div>
                      <div class="banner-btn">
                          <a href="{{ url('/signin') }}" class="btn">Be a Donor</a>
											</div>
										</div>
									</div>
								</div>

                <div class="col-md-7">
						<div class="row">
                          <div class="intro-text">
                            <span class="name">Search Blood</span>
                          </div>

                          <form class="col-md-12 search-form" action="{{url('search')}}" method="GET">
								<div class="form-group row">
								<label for="blood_gr" class="col-sm-5 col-form-label">Blood Group</label>
									<div class="col-sm-7">
										<select class="form-control" name="blood_group" id="blood_group">
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


                            <div class="form-group row">
                              <label for="staticEmail" class="col-sm-5 col-form-label">District</label>
                                <div class="col-sm-7">
                                    <select class="form-control" id="district" name="district">
										<option value="Barguna">Barguna</option>
										<option value="Barisal">Barisal </option>
										<option value="Bhola">Bhola </option>
										<option value="Jhalokati">Jhalokati</option>
										<option value="Patuakhali">Patuakhali </option>
										<option value="Pirojpur">Pirojpur </option>
										<option value="Bandarban">Bandarban </option>
										<option value="Brahmanbaria">Brahmanbaria</option>
										<option value="Chandpur">Chandpur</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Comilla">Comilla</option>
										<option value="Cox's Bazar ">Cox's Bazar </option>
										<option value="Feni">Feni</option>
										<option value="Khagrachhari">Khagrachhari</option>
										<option value="Lakshmipur">Lakshmipur</option>
										<option value="Noakhali">Noakhali </option>
										<option value="Rangamati">Rangamati</option>
										<option value="Dhaka">Dhaka</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Gazipur">Gazipur</option>
										<option value="Gopalganj">Gopalganj</option>
										<option value="Kishoreganj">Kishoreganj </option>
										<option value="Madaripur">Madaripur </option>
										<option value="Manikganj">Manikganj </option>
										<option value="Munshiganj">Munshiganj </option>
										<option value="Narayanganj">Narayanganj</option>
										<option value="Narsingdi">Narsingdi </option>
										<option value="Rajbari">Rajbari </option>
										<option value="Shariatpur">Shariatpur</option>
										<option value="Tangail">Tangail </option>
										<option value="Bagerhat">Bagerhat </option>
										<option value="Chuadanga">Chuadanga </option>
										<option value="Jessore">Jessore </option>
										<option value="Jhenaidah">Jhenaidah</option>
										<option value="Khulna">Khulna </option>
										<option value="Kushtia">Kushtia</option>
										<option value="Magura">Magura </option>
										<option value="Meherpur">Meherpur </option>
										<option value="Narail">Narail </option>
										<option value="Satkhira">Satkhira </option>
										<option value="Jamalpur">Jamalpur</option>
										<option value="Mymensingh">Mymensingh</option>
										<option value="Netrakona">Netrakona</option>
										<option value="Sherpur">Sherpur</option>
										<option value="Bogra">Bogra</option>
										<option value="Joypurhat">Joypurhat </option>
										<option value="Naogaon">Naogaon </option>
										<option value="Natore">Natore</option>
										<option value="Chapainawabganj">Chapainawabganj</option>
										<option value="Pabna">Pabna</option>
										<option value="Rajshahi">Rajshahi</option>
										<option value="Sirajgonj">Sirajgonj</option>
										<option value="Dinajpur">Dinajpur</option>
										<option value="Gaibandha">Gaibandha
										<option value="Kurigram">Kurigram</option>
										<option value="Lalmonirhat">Lalmonirhat</option>
										<option value="Nilphamari">Nilphamari</option>
										<option value="Panchagarh">Panchagarh</option>
										<option value="Rangpur">Rangpur</option>
										<option value="Thakurgaon">Thakurgaon</option>
										<option value="Habiganj">Habiganj</option>
										<option value="Moulvibazar">Moulvibazar</option>
										<option value="Sunamganj">Sunamganj</option>
										<option value="Sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-5 col-form-label">Hospital/Clinic</label>
                              <div class="col-sm-7">
                                	<select class="form-control" id="hospital" name="hospital"></select>
                              </div>
                            </div>

                            <div class="form-group row search-btn">
							   <button class='btn btn-primary'>Search</button>
                            </div>

                           
                          </form>

									</div>
								</div>						
						</div>
					</div>
				</div>
			</div>
   
   <div class="home-content">
    	<!-- About Section -->
			<section class="success" id="about">
				<div class="container">
					<h2 class="text-center">How it works</h2>
					<hr class="star-light">
					<div class="row">
						<div class="col-lg-4 ml-auto">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium, sapien nec rutrum pretium, nibh nulla aliquam sem, tempus elementum leo lacus nec lorem. Sed volutpat felis vel leo ultrices commodo. </p>
						</div>
						<div class="col-lg-4 mr-auto">
							<p>Vestibulum ut convallis magna, eget interdum urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed mollis posuere justo, id blandit justo efficitur vestibulum. Sed vitae lorem at justo euismod.</p>
						</div>
						<div class="col-lg-8 mx-auto text-center">
							<a href="#" class="btn btn-lg btn-outline">
								<i class="fa fa-download"></i>
								Learn More
							</a>
						</div>
					</div>
				</div>
			</section>

			<!-- Contact Section -->
			<section id="contact">
				<div class="container">
					<h2 class="text-center">Contact Us</h2>
					<hr class="star-primary">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<form name="sentMessage" id="contactForm" novalidate>
								<div class="control-group">
									<div class="form-group floating-label-form-group controls">
										<label>Name</label>
										<input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="control-group">
									<div class="form-group floating-label-form-group controls">
										<label>Email Address</label>
										<input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="control-group">
									<div class="form-group floating-label-form-group controls">
										<label>Phone Number</label>
										<input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="control-group">
									<div class="form-group floating-label-form-group controls">
										<label>Message</label>
										<textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<br>
								<div id="success"></div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

   </div>   
		

@endsection
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood BD | Manage your Blood from nearest Donor</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
		

  </head>

	<body id="page-top">
		
		<!-- Header -->
		<header class="masthead">
			<!-- logo & social media -->
			<div class="header-top">
			  <div class="container">
				<div class="row">
				  <div class="col-lg-8 col-md-8">
					<div class="logo text-left">
					  <a href="{{ url('/') }}"><img src="assets/img/logo.png"></a>
					</div>

				  </div>
				  <div class="col-lg-4 col-md-4">
					<div class="social-media">
					  <ul class="clearfix">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			</div>

		</header>
		<div class="main-content">
     
       @yield('content')  
		
		</div>
		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<div class="footer-col col-md-4">
							<h3>Location</h3>
							<p>3481 Melrose Place
							<br>Beverly Hills, CA 90210</p>
						</div>
						<div class="footer-col col-md-4">
							<h3>Around the Web</h3>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#">
										<i class="fa fa-fw fa-facebook"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#">
										<i class="fa fa-fw fa-google-plus"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#">
										<i class="fa fa-fw fa-twitter"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#">
										<i class="fa fa-fw fa-linkedin"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="btn-social btn-outline" href="#">
										<i class="fa fa-fw fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="footer-col col-md-4">
							<h3>About Blood BD </h3>
							<p>Suspendisse et fringilla metus, et accumsan magna. In viverra leo vitae. 
							<a href="#">Start Bootstrap</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							Copyright &copy; Blood BD 2017
						</div>
					</div>
				</div>
			</div>
		</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="assets/js/custom.js"></script>

  </body>

</html>

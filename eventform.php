<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PERPOOS</title>
	<!-- Perpoos CSS Link Start -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/cssOther/animate.min.css">
	<link rel="stylesheet" href="assets/cssOther/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/cssOther/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/FontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalizepty.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Perpoos CSS Link End -->
</head>
<body>

	<!-- Perpoos Navigasi -->
	<nav class="navbar navbar-default p-navbar navbar-fixed-top bg-gradient">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- Tombol Mobile Start -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#p-navmobile" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <!-- Tombol Mobile End -->

			    <!-- Navbar Logo Start -->
				<a href="" class="navbar-brand p-logo">
					<img src="assets/images/Perpoos.png" alt="">
				</a>
				<!-- Navbar Logo End -->


			</div>
			<div class="collapse navbar-collapse" id="p-navmobile">
				<ul class="nav navbar-nav p-nav-control">
			        <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Two Column <b class="caret"></b></a>
			            <ul class="dropdown-menu multi-column columns-2">
				            <div class="row">
					            <div class="col-sm-6">
						            <ul class="multi-column-dropdown">
							            <li><a href="#">Action</a></li>
							            <li><a href="#">Another action</a></li>
							            <li><a href="#">Something else here</a></li>
							            <li class="divider"></li>
							            <li><a href="#">Separated link</a></li>
							            <li class="divider"></li>
							            <li><a href="#">One more separated link</a></li>
						            </ul>
					            </div>
					            <div class="col-sm-6">
						            <ul class="multi-column-dropdown">
							            <li><a href="#">Action</a></li>
							            <li><a href="#">Another action</a></li>
							            <li><a href="#">Something else here</a></li>
							            <li class="divider"></li>
							            <li><a href="#">Separated link</a></li>
							            <li class="divider"></li>
							            <li><a href="#">One more separated link</a></li>
						            </ul>
					            </div>
				            </div>
			            </ul>
			        </li>
					 <li><a href="#">Perpoos Event</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right p-nav-control">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
				</ul>
				<div class="navbar-right">
					<form action="" class="navbar-form">
						<div class="form-group p-nav-search">
							<input type="text" class="form-control" placeholder="Cari...">
						</div>
					</form>
				</div>
			</div>
		</div>
	</nav>
	<!-- Perpoos Navigasi End -->

	<!-- Menu -->
	<div class="container-fluid md-margin-top">
		<div class="row">
			<div class="col-md-12 p-menu">
				<div class="row justify-content-center text-center">
					<div class="col-md-1 colom-normal">
						<p class="p-text"><a href="">Top 5</a></p>
					</div>
					<div class="col-md-1 colom-normal">
						<p class="p-text"><a href="">Recommended</a></p>
					</div>
					<div class="col-md-1 colom-normal">
						<p class="p-text"><a href="">Latest</a></p>
					</div>
					<div class="col-md-1 colom-normal">
						<p class="p-text"><a href="">Rooms</a></p>
					</div>
					<div class="col-md-1 colom-normal">
						<p class="p-text"><a href="">Awards</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- EndMenu -->
	
	<div class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel">
					<div class="panel-body">
						<h3 class="header-title">EVENT FORM</h3>
						<form action="">
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Event Name">
							</div>
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Your Name">
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p style="line-height: 37px;">Number Of Participants</p>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<input type="number" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Phone Number">
							</div>
							<div class="form-group" style="margin-top: 4px;">
								<textarea name="" rows="10" class="new-textarea" placeholder="Note"></textarea>
							</div>
							<button class="btn bg-gradient btn-block" style="color: white;">Send It</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12"  style="margin-bottom: 100px;">
				<div class="ads add-shadow">
					<marquee behavior="" direction=""><h1 class="text-center">ADS</h1></marquee>
				</div>
			</div>
		</div>
	</div>

	<style>
		.new-hover{
			transition: .3s;
			background-color: black;
			overflow: hidden;
			/*z-index: 99;*/
		}
		.new-hover img{
			transition: .3s;
		}
		.new-hover:hover img{
			opacity: 0.7;
			transform: scale(1.1);
		}
	</style>
	<!-- Script Start -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>
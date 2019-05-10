<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- Perpoos CSS Link Start -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/cssOther/animate.min.css">
	<link rel="stylesheet" href="assets/cssOther/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/cssOther/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/FontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/normalizepty.css">
	<link rel="stylesheet" href="assets/css/main.css">
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


	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="panel" style="margin-top: 90px;">
					<div class="panel-body">
							<div class="p-logos">
								<img src="assets/images/logo.png" alt="">
							</div>
							<div class="box-action">
								<p class="clickable-id new-active" id="sign-in-click">Sign In</p>
								<p class="clickable-id" id="sign-up-click">Sign Up</p>
							</div>
						<form action="" id="login-form">
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Username..">
							</div>
							<div class="form-group">
								<input type="password" class="new-input" placeholder="Password..">
							</div>
							<button class="new-btn">Login</button>
							<div class="divider"></div>
							<p class="text-center">Or Login With :</p>
							<div class="sosmed-box">
								<button class="sosmed-btn fb-btn">Facebook</button>
								<button class="sosmed-btn google-btn">Google</button>
							</div>
						</form>
						<form action="" id="register-form">
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Name..">
							</div>
							<div class="form-group">
								<input type="text" class="new-input" placeholder="Username..">
							</div>
							<div class="form-group">
								<input type="password" class="new-input" placeholder="Password..">
							</div>
							<div class="form-group">
								<input type="password" class="new-input" placeholder="Confirm Password..">
							</div>
							<button class="new-btn">Register</button>
							<div class="divider"></div>
							<p class="text-center">Or Register With :</p>
							<div class="sosmed-box">
								<button class="sosmed-btn fb-btn">Facebook</button>
								<button class="sosmed-btn google-btn">Google</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<style>
		#sign-in-click,#sign-up-click{
			cursor: pointer;
		}
	</style>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#register-form').hide();
			$('#sign-in-click').click(function(e) {
		        e.preventDefault();
				$("#login-form").delay(100).fadeIn(200);
		 		$("#register-form").fadeOut(200);
				$('#sign-up-click').removeClass('new-active');
				$('#sign-in-click').addClass('new-active');
			});
			$('#sign-up-click').click(function(e) {
		        e.preventDefault();
				$("#register-form").delay(100).fadeIn(200);
		 		$("#login-form").fadeOut(200);
				$('#sign-in-click').removeClass('new-active');
				$('#sign-up-click').addClass('new-active');
			});
		})
	</script>
	<style>
		body{
			overflow: hidden;
		}
		*{
			font-family: 'Roboto';
		}
		
	</style>
</body>
</html>
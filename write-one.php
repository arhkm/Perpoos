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
	<link rel="stylesheet" href="assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Perpoos CSS Link End -->
	<style>
		*{
			font-family: 'Roboto';
		}
		.image-book{
			width: 100%;
		}
		.image-book img{
			width: 100%;
		}
		.book-name{
			margin-top: -4px;
		}

		.fa-icons{
			width: 60px;
			float: left;
		}
		
		.clear{
			clear: both;
		}

		.fa-red{
			color: #F64F4F;
		}

		.header-title{
			color: #F64F4F;
			font-family: 'Open Sans';
			margin-bottom: 30px;
		}

		.new-input-2{
			height: 40px;
			width: 100%;
			padding: 10px;
			outline: none;
			border:none;
			box-shadow: 0 0 10px #d6d5d5;
			border-radius: 3px;
		}
		.new-input-3{
			width: 100%;
			padding: 10px;
			outline: none;
			border:none;
			box-shadow: 0 0 10px #d6d5d5;
			border-radius: 3px;
		}

		.add-shadow{
			box-shadow: 0 0 10px #d6d5d5 !important;
		}
	</style>
</head>
<body style="height: 1900px;">

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

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-3">
				<div class="panel bg-gradient" style="color: white;">
					<div class="panel-body"><i>WRITEBOX</i></div>
				</div>
				<div class="form-group">
					<select name="" id="" class="form-control">
						<option value="">Save to Draft</option>
						<option value="">Publish</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<form action="">
					<div class="form-group">
						<input type="text" class="new-input-2" placeholder="Title Of Book">
					</div>
					<div class="form-group">
						<textarea class="new-input-3"  placeholder="Synopsis" rows="5"></textarea>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="">Genre</option>
									<option value=""></option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<select name="" id="" class="form-control">
									<option value="">Sub Genre</option>
									<option value=""></option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="new-input-2" placeholder="Put Your Tags Here">
					</div>
					<div class="row">
						<div class="col-sm-3">
							<button class="btn new-btn bg-gradient">Save</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3">
				<div class="image-book add-shadow">
					<img src="assets/images/cover_example.jpg" alt="">
				</div>
				<br>
				<div class="form-group">
					<input type="file" class="form-control">
				</div>
			</div>
		</div>
	</div>


	<!-- Script Start -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script>
		
	</script>
	<!-- Script End -->
</body>
</html>
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

	<!-- Banner Start -->
	<div class="container-fluid p-container-banner">
		<div class="row">
			<div class="col-md-12 p-banner">
				<div class="owl-carousel owl-theme mainslider">
					<div class="item p-nav-item">
						<p>1</p>
					</div>
					<div class="item p-nav-item">
						<p>2</p>
					</div>
					<div class="item p-nav-item">
						<p>3</p>
					</div>
					<div class="item p-nav-item">
						<p>4</p>
					</div>
					<div class="item p-nav-item">
						<p>5</p>
					</div>
					<div class="item p-nav-item">
						<p>6</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->

	<!-- Menu -->
	<div class="container-fluid">
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
	
	<div class="container p-t5-main">
		<div class="row md-margin-top">
			<div class="col-md-3">
				<h1 class="header-title">#TOP 5</h1>
			</div>
		</div>
		<div class="row">
			<?php for ($i=0; $i < 5; $i++) { ?>
			<div class="col-sm-6 col-xs-12">
				<!-- <div class="panel"> -->
					<!-- <div class="panel-body"> -->
						<div class="row" style="margin: 20px 0;">
							<div class="col-sm-4 col-xs-6">
								<a href=""><div class="image-book">
									<img src="assets/images/cover_example.jpg" alt="">
								</div></a>
							</div>
							<div class="col-sm-8 col-xs-6">
								<h3 class="book-name">Title Of Book</h3>
								<p>Written By : Name</p>
								<div class="box-likes">
									<p class="fa-icons"><i class="fa fa-heart"></i> 1000</p>
									<p class="fa-icons"><i class="fa fa-eye"></i> 200</p>
									<p class="fa-icons"><i class="fa fa-file"></i> 100</p>
									<div class="clear"></div>
								</div>
								<p>About :</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero quis officia adipisci autem dolore cum sapiente ipsa a tenetur.</p>
							</div>
						</div>
					<!-- </div> -->
				<!-- </div> -->
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="container">
		<div class="row md-margin-top">
			<div class="col-md-3">
				<h3 class="header-title">#RECOMMENDED</h3>
			</div>
		</div>
		<div class="row">
			<!-- <div class="owl-carousel owl-theme recomslide"> -->
				<?php for($i = 0;$i< 12;$i++){ ?>
				<!-- <div class="item"> -->
					<div class="col-sm-2 col-xs-6">
						<!-- <div class="panel"> -->
							<!-- <div class="panel-body"> -->
								<div class="row" style="margin-bottom: 20px;">
									<div class="col-xs-12">
										<div class="image-book new-hover">
											<a href="#">
												<img src="assets/images/cover_example.jpg" alt="">
											</a>
										</div>
										<h4>Title Of Book</h4>
										<p style="margin-top: -10px;">Written By : Name</p>
										<div class="box-likes">
											<p class="fa-icons"><i class="fa fa-heart"></i> 1000</p>
											<p class="fa-icons"><i class="fa fa-eye"></i> 200</p>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							<!-- </div> -->
						<!-- </div> -->
					</div>
				<?php } ?>
			<!-- </div> -->
			<center><a href="" class="btn-a bg-gradient">View All</a></center>
		</div>
	</div>
	<div class="container">
		<div class="row md-margin-top">
			<div class="col-md-12 p-iklan p-bg-grey"></div>
		</div>
	</div>
	<div class="container">
		<div class="row md-margin-top">
			<div class="col-md-3">
				<h3 class="header-title">#LATEST</h3>
			</div>
		</div>
		<div class="row">
			<div class="owl-carousel owl-theme recomslide">
				<?php for($i = 0;$i< 12;$i++){ ?>
				<div class="item">
					<div class="col-sm-3 col-xs-6">
						<div class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<div class="image-book">
											<img src="assets/images/cover_example.jpg" alt="">
										</div>
										<h4>Title Of Book</h4>
										<p>Written By : Name</p>
										<div class="box-likes">
											<p class="fa-icons"><i class="fa fa-heart "></i> 1000</p>
											<p class="fa-icons"><i class="fa fa-eye "></i> 200</p>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<div class="image-book">
											<img src="assets/images/cover_example.jpg" alt="">
										</div>
										<h4>Title Of Book</h4>
										<p>Written By : Name</p>
										<div class="box-likes">
											<p class="fa-icons"><i class="fa fa-heart "></i> 1000</p>
											<p class="fa-icons"><i class="fa fa-eye "></i> 200</p>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<div class="image-book">
											<img src="assets/images/cover_example.jpg" alt="">
										</div>
										<h4>Title Of Book</h4>
										<p>Written By : Name</p>
										<div class="box-likes">
											<p class="fa-icons"><i class="fa fa-heart "></i> 1000</p>
											<p class="fa-icons"><i class="fa fa-eye "></i> 200</p>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-6">
						<div class="panel">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12">
										<div class="image-book">
											<img src="assets/images/cover_example.jpg" alt="">
										</div>
										<h4>Title Of Book</h4>
										<p>Written By : Name</p>
										<div class="box-likes">
											<p class="fa-icons"><i class="fa fa-heart "></i> 1000</p>
											<p class="fa-icons"><i class="fa fa-eye "></i> 200</p>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<center><a href="" class="btn-a bg-gradient">View</a></center>
		</div>
	</div>


	<footer class="md-margin-top">
		<h1>Footer</h1>
	</footer>
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
	<script>
		$('.mainslider').owlCarousel({
		    loop:true,
		    // margin:10,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:4000,
			autoplayHoverPause:false,
		    animateOut: 'fadeOut',
    		animateIn: 'fadeIn',
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
		$('.recomslide').owlCarousel({
		    loop:true,
		    // margin:10,
		    nav:true,
		    autoplay:true,
		    autoplayTimeout:10000,
			autoplayHoverPause:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});
	</script>
	<!-- Script End -->
</body>
</html>
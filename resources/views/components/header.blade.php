<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.owner.name')}}</title>

    
       <!-- Favicon -->
       <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/fav-icon.png">
       <!-- bootstrap CSS -->
       <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
       <!-- carousel CSS -->
       <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
       <!-- animate CSS -->
       <!-- <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all"> -->
       <!-- animated-text CSS -->
       <!-- font-awesome CSS -->
       <link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
       <!-- font-flaticon CSS -->
       <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
       <!-- theme-default CSS -->
       <link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
       <!-- meanmenu CSS -->
       <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
       <!-- transitions CSS -->
       <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
       <!-- venobox CSS -->
       <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
       <!-- bootstrap icons -->
       <link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
       <!-- Main Style CSS -->
       <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">  
       <!-- responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
       
		<link rel="stylesheet" href="assets/css/scrollCue.css">

	   <link rel="stylesheet" href="assets/css/progresscircle.css">
 
 
      <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
      <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">
             

</head>
<body>
    
 
      <!--========== loder========= -->

	<div class="containers">
		<div class="text">
		  <h3>Loading...</h3>
		</div>
		
		<div class="loader">
		  <div class="load-box">
			<div class="load"></div>
		  </div>
		</div>
		
	  </div>
    
       <!-- ==========loder-end ===============-->  


<!--==================================================-->
	<!-- Start Main Menu  -->
<!--==================================================-->
<div class="Mindfresh_nav_manu">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="logo">
					<a class="logo_img" href="index-2.html" title="{{ config( 'app.owner.name' )}}">
						<!-- <img src="assets/images/resource/main-logo.png" alt="logo"> -->
                        <div class="logo-custom-style"> {{ config( 'app.owner.name' )}} </div>
					</a>
					<a class="main_sticky" href="index-2.html" title="{{ config( 'app.owner.name' )}}">
						<!-- <img src="assets/images/resource/Dr_Alisha_First_Logo_Transparent.png" alt="logo"> -->
                         <div class="logo-custom-style"> {{ config( 'app.owner.name' )}} </div>
					</a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="header-box">
					<div class="header-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="header-content">
						<p>Free Call</p>
						<span>(+1) 4444 444 444</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="header-box">
					<div class="header-icon style-head">
						<i class="fas fa-clock"></i>
					</div>
					<div class="header-content">
						<p>Visit Us Daily</p>
						<span>Mon-Fri: 10am-18pm</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="header-box">
					<div class="header-icon style-head">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="header-content">
						<p>Address Center</p>
						<span> 103 Mallin Street, NY 10025</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="header-menu-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
		<x-menu></x-menu>
		</div>
			<div class="col-lg-5">
				<div class="header-single-box">
					<div class="header-cart">
						<a href="shop.html"><i class='fa fa-bell'><span class='counters'></span></i></a>
					</div>
					<div class="header-src-btn">
						<div class="search-box-btn search-box-outer"><i class="fas fa-search"></i></div>
					</div>
					<div class="section-button header-button">
						<a href="/contact">Make An Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="sticky-header" class="header-menu-sticky">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="logo">
					<a class="logo_img" href="index-2.html" title="{{ config( 'app.owner.name' )}}">
						<!-- <img src="assets/images/resource/main-logo.png" alt="logo"> -->
                        <div class="logo-custom-style">{{ config( 'app.owner.name' )}} </div>

					</a>
					<a class="main_sticky" href="index-2.html" title="{{ config( 'app.owner.name' )}}">
						<!-- <img src="assets/images/resource/main-logo.png" alt="logo"> -->
                        <div class="logo-custom-style">4 {{ config( 'app.owner.name' )}} </div>

					</a>
				</div>
			</div>
			<div class="col-lg-5">
				<x-menu></x-menu>
			</div>
			<div class="col-lg-4">
				<div class="header-single-box">
					<div class="header-cart">
						<i class='fa fa-shopping-cart'>
							<span class='counters'></span>
						  </i>
					</div>
					<div class="header-src-btn">
						<div class="search-box-btn search-box-outer"><i class="fas fa-search"></i></div>
					</div>
					<div class="section-button header-button">
						<a href="/contact">Make An Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- dreamhub Mobile Menu  -->

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<x-menu></x-menu>
	</div>
</div>

<!--==================================================-->
<!-- End  Main Menu  -->
<!--==================================================-->


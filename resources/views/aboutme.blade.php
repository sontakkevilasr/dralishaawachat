<x-header></x-header>

<!--==================================================-->
       <!-- Start Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h1>About Me</h1>
					</div>
					<div class="breadcumb-content-menu">
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li><span>/ About Me</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
     <!-- Start Breadcumb Area -->
<!--==================================================-->



<!--==================================================-->
	<!-- start about-section  -->
<!--==================================================-->

<div class="about-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6" data-cue="flipInX">
				<div class="abouts-thumb">
                   <img src="assets/images/resource/About-me.png" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="about-single-box" data-cue="zoomIn">
					<div class="section-title">
						<h5>About Us</h5>
						<h2>Hello, I Am  <br>
						{{ config( 'app.owner.name' ) }}	</h2>
						<p>Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada.
							Mauris augue neque gravida in fermentum et sollicitudin ac. Cursus risus at ultrices
							mi tempus imperdiet nulla. Parturient montes nascetur ridiculus mus mauris. <br> <br>

							Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam malesuada.
                            Mauris augue neque gravida in fermentum et sollicitudin ac. Cursus risus at ultrices
                            mi tempus imperdiet nulla. Parturient
						</p>
					</div>
					<div class="section-button">
						<a href="about-us.html">GET APPOINTMENT</a>
					</div>
					<div class="home-play-button">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="fas fa-play"></i></a>		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
	<!-- end about-section  -->
<!--==================================================-->

<x-service></x-service>

<x-testimonial></x-testimonial>

<x-footer></x-footer>

<?php
get_header();
include("mailto.php");
?>
<div class="container-fluid logotxt">
	  <h1>Webstinger</h1>
</div>

<main>
	<section class="clearfix fcont" id="skills">
		<div class="container">
			<h2 class="text-center">SKILLS</h2>

			 <div class="container">
			 	 
			 	 <div class="row">
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/html5.png" class="img-fluid">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/css3.png" class="img-fluid imgadj">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/js.png" class="img-fluid imgadj">
			 	 	 </div>
			 	 </div>
                  <div class="row">
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/jquery.png" class="img-fluid">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/php.png" class="img-fluid imgadj">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/sass.png" class="img-fluid imgadj">
			 	 	 </div>
		        </div>
                 <div class="row">
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/bootstrap.png" class="img-fluid">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/WP.png" class="img-fluid imgadj">
			 	 	 </div>
			 	 	 <div class="col-md-4">
			 	 	 	<img src="<?php echo get_stylesheet_directory_uri()?>/img/angular.png" class="img-fluid imgadj">
			 	 	 </div>
		        </div>

			 </div>

		</div>
	</section>

	<section id="projects">
		
		<div class="container-fluid">
			<h2 class="text-center">PROJECTS</h2>
			<div class="container">
				 
				 <div class="row">
				 	 <div class="col-md-4 hold">
				 	 	<a href="http://fancy.webstinger.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/fancyweb.png" class="img-fluid">
				 	 		<div class="overl">
   					 <div class="text">Fancy Web App</div>
   					</div>
 					</a>
				 	 </div>
				     <div class="col-md-4 hold1">
				 	 	<a href="http://tribute.webstinger.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/tribute.png" class="img-fluid">
				 	 		<div class="ov">
					<div class="text">Tribute Page</div>
				</div>
				 	 	</a>
				 	 </div>
				 	 <div class="col-md-4 hold2">
				 	 	<a href="http://weather.webstinger.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/weatherapp.png" class="img-fluid">
				 	 		<div class="ove">
					<div class="text">Weather App</div>
				</div>
				 	 	</a>
				 	 </div>
				 	
				 </div><br>
				 <div class="row">
				 	<div class="col-md-12 hold3">
				 	 	<a href="http://requote.webstinger.com/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/requote.png" class="img-fluid">
				 	 		<div class="over">
						<div class="text">Requote App</div>
					</div>
				 	 	</a>

				 	 </div>
				 </div>

			</div>
		</div>
		<br>
	</section>

	<section id="profile">
		<div class="container">
			<h2 class="text-center">MEET THE DEVELOPER</h2>
			<center>
				
				<div class="col-md-4">
	<!--Card-->
<div class="card">

    <!--Card image-->
    <div class="view overlay hm-white-slight">
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/dev.jpg" class="img-fluid" alt="">
        <a >
            <div class="mask"></div>
        </a>
    </div>

    <!--Card content-->
    <div class="card-body">
        <!--Title-->
        <h4 class="card-title">Soumyojyoti Majumdar</h4>
        <!--Text-->
        <p class="card-text">Full stack web dev intern</p>
        <a class="icons-sm li-ic" href="https://www.linkedin.com/in/soumyojyoti-majumdar-774b23130/" target="blank"><i class="fa fa-linkedin"> </i></a>
        <!--Twitter-->
 <!--        <a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a> -->
        <!--Dribbble-->
        <a class="icons-sm fb-ic" href="https://www.facebook.com/profile.php?id=100008553572690" target="blank"><i class="fa fa-facebook"> </i></a>
    </div>

</div>
<!--/.Card-->

				</div>

			</center>
		</div>
		<br>
	</section>

	<section id="contactus">
		<div class="container">
			<h2 class="text-center">CONTACT US</h2>
			<div class="row">
				<div class="col-md-4 contdet">
					<h4> If you have any project to discuss, get in touch with me</h4><br>Phone: +91-9674220696<br>Skype ID: <a href="skype:Soumyojyotimajumdar@hotmail.com?add">Soumyojyoti Majumdar</a><br>Email: <a href="mailto:admin@webstinger.ml">admin@webstinger.ml</a>
				</div>
				<div class="col-md-4 col-sm-6 contform">
					
					<form action="#contactus" id="contactform" method="post">
						<div class="md-form">
							<input type="text" name="clname" id="clname" required>
							<label for="clname">Name:</label>
						</div>
						<div class="md-form">
							<input type="email" name="clmail" id="clmail" required>
							<label for="clmail">Mail:</label>
						</div>
						<div class="md-form">
							<textarea type="text" id="clmessage" class="md-textarea" style="height: 100px" name="clmessage" required></textarea>
        					<label for="clmessage">Your message</label>
						</div>
						<div class="md-form">
							<button class="btn def" type="submit">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
						</div>
					</form>

				</div>  
			</div>
		</div>
		<br>
	</section>
</main>
<?php
get_footer();
?>
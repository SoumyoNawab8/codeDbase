<?php
/*Template Name: Weather App */
wp_head();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Weather App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/weatherapp/style.css">
</head>
<body>

   <div class="container"><center>
     <div class="row">
     <div class="col-md-12">
       <h1>WEATHER APP</h1>
       <hr>
       </div>
    </div>
       <div class="continue">
     <p id="city"></p>
<!--      <div id="state"></div> -->
     <center>
     	<ul class="list-inline">
     		<li>
     			<div id="temp"></div></li>
     			<li class="celc">
     				<sup id="celc">
     					<a href="#" id="f">°C</a>
     				</sup>
     			</li>
     		</ul>
     	</center>    
     <p id="fc"></p>
     <center>
     <div id="ic"></div>
     </center>    
     </center>
     </div></div>
<center><p class="bottom"><u>Inspired by <a href="https://codepen.io/Soumyoahu100">Soumyojyoti</a></u></p></center>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/weatherapp/custom.js"></script>
</body>
</html>

<?php
wp_footer();
?>
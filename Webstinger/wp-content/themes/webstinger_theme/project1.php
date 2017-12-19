<?php
/* Template Name: Requote web App */
wp_head();
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>A Quote Generator</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/requote/requote.css">
</head>
<body>
		  <!-- Heading !-->
  <div class="container">
    <div class="row">
	     <div class="col-md-12">
	  			<h1>R E Q U O T E</h1>
	    	<hr>
		</div>
    </div>
    <center>
    <div class="row">
	      <div class="col-md-8 qbox-adj">
		        <div class="quote-box">
			          <div id="quote">Life is sacrifice</div>
			          <p id="author">-Soumyojyoti Majumdar</p>
		        </div>
	        </div>
    </div>
  
   <div class="row qbtn-adj">
   	<div class="col-md-3">
    <button class="btn fa green btn-lg get-quote"><i class="fa-quote-left  fa-fw">Generate</i></button>
    </div>
	<div class="col-md-2">
	 <button class="btn blue fa btn-lg share-quote"><i class="fa-twitter fa-fw"> Share </i></button>
	</div>
 </div>
</center>
    <div id="name">by <a  href="https://codepen.io/Soumyoahu100">Soumyojyoti</a></div>
       </div>
</body>
</html>
<?php
wp_footer();
?>


<?php
function enqueue_webstinger_stylesheets(){
	$directory = get_stylesheet_directory_uri();
	wp_enqueue_style("fontawesome","https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
	wp_enqueue_style("bootstrap", $directory ."/css/bootstrap.min.css");
    wp_enqueue_style("MDbootstrap",$directory."/css/mdb.min.css");
    wp_enqueue_style("customtheme-style",$directory."/css/style.css" );
}
add_action("wp_enqueue_scripts", "enqueue_webstinger_stylesheets");

function webstinger_js(){
	 $directory = get_stylesheet_directory_uri();
wp_enqueue_script( 'jqueryJS',$directory."/js/jquery-3.1.1.js", false, '', true );
wp_enqueue_script( 'popperjs', $directory."/js/popper.min.js", false, '', true );
wp_enqueue_script( 'tetherjs', $directory."/js/tether.js", false, '', true );
wp_enqueue_script( 'bootstrapjs', $directory."/js/bootstrap.js", false, '', true );
wp_enqueue_script( 'MDB', $directory."/js/mdb.min.js", false, '', true );
wp_enqueue_script( 'CUSTOM', $directory."/js/custom.js", false, '', true );
// wp_enqueue_script( 'Translate', "http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit", false, '', true );	
}
add_action("wp_enqueue_scripts", "webstinger_js");
?>
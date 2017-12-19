<?php
wp_head();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEBSTINGER</title>
</head>
<body class="bg-img scrollbar-light-blue" data-spy="scroll" data-target="#mainNavbar" data-offset="0">
   <header class="smooth-scroll">
   	<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo horizontal-spy" style="display: none;" id="mainNavbar">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><!-- <img src="<?php echo get_stylesheet_directory_uri()?>/screenshot.png" class="img-fluid logoimg"> --><h3>WEBSTINGER</h3></a>
<!-- this is the header part not for publishing -->
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="/Webstinger">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactus">Contact</a>
            </li>
            <!-- Dropdown -->
         <!--    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->

        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class="form-inline">
           <!--  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
   </header>

<?php
		 
		    $name="Webstinger";
		   $email=$_POST['clmail'];
		   $msg=$_POST['clmessage'];
		   $msg.="From".$email;
		   $name.=$_POST['clname'];
		   
		   if(mail("gtechxd@gmail.com",$name,$msg)){
		   	 ?>
              <style type="text/css">
              	.contactform{
              		display: none;
              	}
              </style>
              
		   	 <?php
		   }

		 
		 
		?>
<?php
/************************************************************************/
/* PHP Simple PasswordProtect v1.0                                      */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, MySQL, HTML programming             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* but please leave this header intact, thanks                          */
/************************************************************************/
##########################################################################
$password = "admin";  // Modify Password to suit for access, Max 10 Char.
##########################################################################
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include ($path. "/includes/header.html");
   include ($path. "/includes/navigation.html");
?>

        <div class="main-container">
            <section class="page-title page-title-4 image-bg overlay">
                <div class="background-image-holder">
                    <img alt="Background Image" class="background-image" src="img/home-2-1.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="uppercase mb0">For Investors</h4>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section>
                <div class="container">

<?php 
  print "<h2 align=\"center\">Password Protected</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

                        
                        <div class="col-sm-12 col-md-8 col-md-offset-2 mb32">
                            <h5 class="uppercase">
                                <strong>For Investors</strong>
                            </h5>
                            <h4 class="">
                            Hello world! This page is password protected.
                            </h4>
                            <hr>
                    <!-- </div>
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                            <h2 class="">Who we are</h2>  -->
                            <p class="lead">
                                Ripple has built the next generation of transport protocols for use over the open internet — creating a state-of-the-art Worldwide Broadcasting System. Ripple has developed and patented deep learning processes to predict internet traffic congestion and leverage the adoption of WebRTC and WebSockets to build a virtual network connecting over a billion devices to efficiently stream video to an unlimited number of concurrent viewers. Ripple allows operators and broadcasters to stream linear and live video with the equivalent quality, reliability, and low latency as a fully managed network -- no blocking, stuttering, or failed video streams and is compatible with emerging 4K video. It’s easy to implement adding only a few lines of code inside the player application to provide a vastly improved viewing experience.
                            </p>
                        </div>

<!-- END OF HIDDEN HTML -->

                    <?php 
                    }
                    else
                    {
                    // Wrong password or no password entered display this message
                    if (isset($_POST['password']) || $password == "") {
                      print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password<br></font></p>";}
                      print "<form method=\"post\"><div class=\"col-sm-12 col-md-4 col-md-offset-4\" align=\"center\">Please enter password for access<br>";
                      print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></div></form>";
                    }
                    ?>

                </div>
                <!--end of container-->
            </section>



 <?php include ($path. "/includes/footer.html"); ?>

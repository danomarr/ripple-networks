<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include ($path. "/includes/header.html");
   include ($path. "/includes/navigation.html");
?>
        </div>
        <div class="main-container">
            <section class="cover fullscreen image-bg overlay">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/home12.jpg" />
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                            <div class="feature bordered text-center">
                                <h4 class="uppercase">Login Here</h4>
                                <form class="text-left">
                                    <input class="mb0" type="text" placeholder="Username" />
                                    <input class="mb0" type="password" placeholder="Password" />
                                    <input type="submit" value="Login" />
                                </form>
                                <p class="mb0">Forgot your password?
                                    <a href="#">Click Here To Reset</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
    <?php include ($path. "/includes/footer.html"); ?>

                
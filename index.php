<?php
session_start();
?>
<?php
$pathToRoot = '../';
include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KAT - Home</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/blog-home.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

    <!-- header -->
    <header>
        <div class="banner justify-content-center" style="position: absolute;" >
            <h1 class="banner-heading">Knockout Affordable Therapy</h1>
            <p class="banner-p">Say what you want. How you want.</p>
           <a href="RegistrationPage/RegisterPage.php"><button class="main-button"><span>Sign Up!</span></button></a>

        </div>


        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top nav-menu">
            <a href="index.php" class="navbar-logo text-light text-uppercase" style="text-decoration: none;"><span class="navbar-K">K</span><span class="navbar-AT"> A T</span></a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                <div class="bg-light line1"></div>
                <div class="bg-light line2"></div>
                <div class="bg-light line3"></div>
            </button>

            <div class="collapse navbar-collapse justify-content-center text-uppercase" id="myNavbar">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="index.php" class="nav-link m-2 menu-item font-weight-bold nav-active" title="Home"><i class="fa fa-home" style="font-size:30px;"> </i></a>
                    </li>

                    <li class="nav-item">
                        <a href="StandardPages/hot.php" class="nav-link m-2 menu-item font-weight-bold" title="Hot"><i class="fa fa-fire" style="font-size:30px;"> </i></a>
                    </li>


                    <li class="nav-item">
                        <a href="StandardPages/categories.php" class="nav-link m-2 menu-item" title="Categories"><i class="fa fa-th-list" style="font-size:30px;"> </i></a>
                    </li>
                </ul>

            </div>
            <a href="#" class="mb-4 nav-link m-2 nav-sign-in" data-toggle="dropdown"><i class="fa fa-user"></i> Sign In</a>
            <?php include 'includes/modal-index.php' ?>
        </nav>
       
<!-- End of Navbar -->
    </header>
    <!-- end of header -->

    <!-- About-->
    <section class="about p-5">
        <div class="text-center">
            <h2 class="display-4 ">About Us
                <i class=" fas fa-question-circle"></i>
            </h2>
        </div>
        <div class="mt-5 ">
            <p class="lead">This is but a platform for everyone to speak their minds with no limitations. Whether it be offensive, racist, or prejudice, you are free to express yourself here. <span class="font-weight-bold ">You reap what you sow</span>. This website
                is very prone to copyright infringements and what-not, therefore updates will be issued at a timely basis to maintain it and leave it open for the public.
            </p>
        </div>
    </section>
    <!--End of About -->

    <!-- SLideshow -->
    <section class="slideshow">
        <?php include 'includes/slideshow.php'; ?>
    </section>

    <!--End of slideshow-->


    <!--Timer-->
    <section class="p-5 text-center timer">
        <p class="lead "><i class="fas fa-wrench"></i> Our next update is in:</p>
        <div id="clockdiv">
            <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
            </div>
            <div>
                <span class="hours"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>
    </section>
    <!--End of Timer-->

    <!-- Footer -->
    <footer>
        <div class=" text-center mt-5">
            <a href="index.php" class="navbar-logo text-light text-uppercase" style="text-decoration: none;"><span class="navbar-K">K</span><span class="navbar-AT"> A T</span></a>
        </div>
        <div class="text-center">
            <ul class="social-media-list mt-3">
                <li>
                    <a href="https://www.facebook.com/">
                        <ion-icon class="logo-facebook green-text" name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/">
                        <ion-icon class="logo-twitter green-text" name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/">
                        <ion-icon class="logo-instagram green-text" name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/">
                        <ion-icon class="logo-github green-text" name="logo-github"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </footer>






    <!-- jQuery -->
    <script src="js/jquery.js "></script>
    <!-- Slideshow skd -->
    <script src="http://code.jquery.com/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js "></script>
    <script src="js/timer.js"></script>

</body>

</html>
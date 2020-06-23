<?php session_start(); ?>
<?php 
 $pathToRoot = '../';
 include $pathToRoot.'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>KAT - Categories</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <link rel="stylesheet" href="../css/blog-cat.css">
    </head>

    <body>


        <!-- header -->
        <header>
            <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top nav-menu">
            <a href="../index.php" class="navbar-logo text-light text-uppercase" style="text-decoration: none;"><span class="navbar-K">K</span><span class="navbar-AT"> A T</span></a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
                <div class="bg-light line1"></div>
                <div class="bg-light line2"></div>
                <div class="bg-light line3"></div>
            </button>

            <div class="collapse navbar-collapse justify-content-center text-uppercase" id="myNavbar">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="../index.php" class="nav-link m-2 menu-item font-weight-bold" title="Home"><i class="fa fa-home" style="font-size:30px;"> </i></a>
                    </li>

                    <li class="nav-item">
                        <a href="hot.php" class="nav-link m-2 menu-item font-weight-bold" title="Hot"><i class="fa fa-fire" style="font-size:30px;"> </i></a>
                    </li>


                    <li class="nav-item">
                        <a href="categories.php" class="nav-link m-2 menu-item nav-active" title="Categories"><i class="fa fa-th-list" style="font-size:30px;"> </i></a>
                    </li>
                </ul>

            </div>
            <a href="#" class="mb-4 nav-link m-2 nav-sign-in" data-toggle="dropdown"><i class="fa fa-user"></i> Sign In</a>
            <?php include '../includes/modal.php' ?>
        </nav>
       
<!-- End of Navbar -->


        </header>
        <!-- end of header -->

        <!-- Selector -->
        <div class="site-section p-5">
            <div class=" text-center mt-5">

                <h2 class=" selector-header">Choose Your Poison <i class="fab fa-envira green-text"></i></h2>
                <p class="color-black-opacity-5 selector-p">Get To Reading. Get Educated.</p>
            </div>
            <div class="container mt-5 mb-5">

                <div class="row  mb-5">

                    <?php
                 

                    $post_query = 'SELECT * FROM posts';
                    $select_all_posts_query = mysqli_query($connection, $post_query);

                    $politics_count = 0;
                    $techno_count = 0;
                    $religion_count = 0;
                    $food_count = 0;
                    $social_count = 0;
                    $comedy_count = 0;
                    $sports_count = 0;
                    $music_count = 0;
                    $science_count = 0;
                    $healthnfitness_count = 0;
                    $travel_count = 0;
                    $pets_count = 0;



                    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                        $post_cat_id = $row['post_category_id'];

                        if($post_cat_id == 1){
                            $politics_count++;
                        }
                        if($post_cat_id == 2){
                            $techno_count++;
                        }
                        if($post_cat_id == 3){
                            $religion_count++;
                        }
                        if($post_cat_id == 4){
                            $food_count++;
                        }
                        if($post_cat_id == 5){
                            $social_count++;
                        }
                        if($post_cat_id == 6){
                            $comedy_count++;
                        }
                        if($post_cat_id == 7){
                            $sports_count++;
                        }
                        if($post_cat_id == 8){
                            $music_count++;
                        }
                        if($post_cat_id == 9){
                            $science_count++;
                        }
                        if($post_cat_id == 10){
                            $healthnfitness_count++;
                        }
                        if($post_cat_id == 11){
                            $travel_count++;
                        }
                        if($post_cat_id == 12){
                            $pets_count++;
                        }

                    }




                    $cat_count_array = array($politics_count,
                                             $techno_count,
                                             $religion_count,
                                             $food_count,
                                             $social_count,
                                             $comedy_count,
                                             $sports_count, $music_count, $science_count, $healthnfitness_count,
                                             $travel_count,
                                             $pets_count);


                    $cat_query = 'SELECT * FROM categories';
                    $select_all_categories_query = mysqli_query($connection, $cat_query);
                    $count = 0;

                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        $cat_title = $row['cat_title'];
                        $cat_id = $row['cat_id'];

                        $address = 'category.php?cat=' . $cat_id;



                        echo "<div class='col-6 col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2 mt-3'>
                    <a href='".$address."' class='popular-category h-100' style='text-decoration:none;' name='cat'>

                        <span class='caption mb-2 d-block'>{$cat_title}</span>
                        <span class='number'>{$cat_count_array[$count]}</span>
                    </a>
                </div>";
                        $count++;



                        


                    }

               


                    ?>

                </div>


                <!--End of selector -->
                <hr>
               <?php 
 $pathToRoot = '../';
 include $pathToRoot.'includes/footer.php';
?>
<?php session_start(); ?>
<?php
$pathToRoot = '../';
include $pathToRoot . 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAK - Popular Posts</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/blog-hot.css">

    <style type="text/css">
        .wrap {
            overflow: auto;
        }

        .loading {
            color: red;
        }
    </style>

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
                        <a href="hot.php" class="nav-link m-2 menu-item font-weight-bold nav-active" title="Hot"><i class="fa fa-fire" style="font-size:30px;"> </i></a>
                    </li>


                    <li class="nav-item">
                        <a href="categories.php" class="nav-link m-2 menu-item" title="Categories"><i class="fa fa-th-list" style="font-size:30px;"> </i></a>
                    </li>
                </ul>

            </div>
            <a href="#" class="mb-4 nav-link m-2 nav-sign-in" data-toggle="dropdown"><i class="fa fa-user"></i> Sign In</a>
            <?php include '../includes/modal.php' ?>
        </nav>
    </header>
    <!-- end of header -->

    <!-- Page Content -->
    
    <div class="container p-5">

        <div class="row text-align-center">

            <!-- Popular-->
            <div class="col-md-8 mt-5">
            <h1 class="page-header mb-5 text-align-center"">
                    Scroll Down
                    <i class="fa fa-fire"></i>
                </h1>
                
                <!-- Blog Search Well -->
                <div class="well blog-search">

                    <form action="search.php" method="post">

                        <input name="search" type="text" class="form-control float-left" placeholder="Lucid Dreaming" style="width:90%; height:50px;">
                        <button name="submit" class="btn btn-default" type="submit">
                            <span class="fa fa-search-plus green-text" style="font-size:30px;"></span>
                        </button>

                    </form>
                    <!-- /.input-group -->
                </div>




            </div>

            <!-- Blog Entries Column -->
            <div class="container mt-5" id="wrap" style="margin: 0px auto;">

                <?php


                $query = "SELECT * FROM posts";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {

                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_tags = $row['post_tags'];
                   

                    $address = 'demo-page.php?post_id=' . $post_id;

                    echo "<div class='card mb-5' id='results'>
                    <img class='card-img-top' src='{$post_image}' alt='Card image cap'>
                    <div class='card-body'>
                        <h2 class='card-title'>{$post_title}</h2>

                        <a href='". $address."' class='btn' style='color:#34ebc0; background-color:black;'>Read More &rarr;</a>
                    </div>
                    <div class='col-xs-9 col-md-7'>
                        Posted on {$post_date} by
                        {$post_author}

                    </div>

                </div>";
                }

                ?>

               


                <!-- JAVASCRIPT -->
                <!-- <script type="text/javascript">
                function yHandler() {
                    var wrap = document.getElementbyID('wrap');
                    var contentHeight = wrap.offsetHeight;
                    var yOffset = window.pageYOffset;
                    var y = yOffset + window.innerHeight;
                    // var more = '<div class="newData">Hello</div>';
                    if (y >= contentHeight) {
                        wrap.innerHTML += '<div class="newData"></div>';
                    }

                };
                window.onscroll = yHandler;
            </script> -->
                
                <script src="../js/loadmore.js"></script>
                <script src="../js/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>


</html>
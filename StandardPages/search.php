<?php session_start() ?>
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

    <title>TAK - Popular Posts</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/blog-hot.css">

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
       
<!-- End of Navbar -->

    </header>
    <!-- end of header -->

    <!-- Page Content -->
    <div class="container p-5">

        <div class="row">

            <!-- Popular-->
            <div class="col-md-8 mt-5">

                <h1 class="page-header mb-5">
                    Most Popular
                    <small>see what's <span class="font-italic">hot </span><i class="fa fa-fire"></i></small>
                </h1>

                <?php
                
                
                
                if(isset($_POST['submit'])){
                   $search = $_POST['search'];
                    
                    
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
                    $search_query = mysqli_query($connection, $query);
                    
                    
                    if(!$search_query){
                        die("QUERY FAILED" .    mysqli_error($connection));
                    }
                    $count = mysqli_num_rows($search_query);
                    
                    if($count == 0){
                        echo "<p class='lead'> NO RESULTS for <span class='font-weight-bold'>{$search} </span> </p>";
                    } else{
                        
                        
                        
while($row = mysqli_fetch_assoc($search_query)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = $row['post_content'];
    $post_tags = $row['post_tags'];
 
    $address = 'demo-page.php?post_id=' . $post_id;
    
    echo "<h2>
                        <a href='#' class='blog-title-link'>{$post_title}</a>
                    </h2>
                    <p class='lead'>
                        by <a href='index.php' class='author-link'>{$post_author}</a>
                    </p>
                    <p><span class='glyphicon glyphicon-time'></span> Posted on {$post_date}</p>
                    <hr>
                    <img class='img-responsive blog-post' src='{$post_image}' alt=''>
                    <hr>
                    
                    <a class='btn btn-primary 'style='color:#34ebc0; background-color:black;' href='". $address."'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>

                    <hr>";
}

                        
                    }
                }
                
            
               
                


?>

                <!-- Pager -->
                <ul class="pager mb-5">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 mt-5">
                
                

                <!-- Blog Search Well -->
                <div class="well blog-search">
                    <h4>Blog Search</h4>
                    <form action="" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="fa fa-search-plus green-text"></span>
                        </button>
                        </span>
                    </div>
                        </form>
                    <!-- /.input-group -->
                </div>
                
                
                
                

                <!-- Blog Categories Well -->
                <div class="well mt-5 blog-cat-pop">
                    <h4>Popular Categories</h4>
                    <div class="row blog-cat-pop-items">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php
                                $query = "SELECT * FROM categories";
$select_cat_sidebar = mysqli_query($connection, $query);
$cat_sidebar_array = array();
 while($row = mysqli_fetch_assoc($select_cat_sidebar)) {
                                    
    $cat_title = $row['cat_title'];
     
     $cat_sidebar_array[] = $cat_title;
    
    
}

                                ?>
                                
                                
                                <?php
                                $count = 0;
                                while($count<4) {
                                    
    
    
    
    
    echo "<li><a href='#'>{$cat_sidebar_array[$count]}</a>
                                </li>";
                                    
                                    $count++;
    
}
                                
                                
                                
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               <?php
                                $count = 4;
                                while($count<8) {
                                    
    
    
    
    
    echo "<li><a href='#'>{$cat_sidebar_array[$count]}</a>
                                </li>";
                                    
                                    $count++;
    
}
                                
                                
                                
                                ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->

                    </div>
                    <!-- /.row -->
                    <div class="text-center cat-more">
                        <a href="categories.php"> <i class="fa fa-th-list"></i> More</a>
                    </div>
                </div>

                <!-- Side Widget Well -->
                <div class="well mt-5">
                    <h4>Side Note</h4>
                    <p>Not all the categories you like are available. If you have any in mind, you can always email us at <span class="green-text font-weight-bold">tak@business.com</span>.</p>
                </div>

            </div>

        
        
        <!-- /.row -->
            
            <div class="p-5"></div>

        
<?php 
 $pathToRoot = '../';
 include $pathToRoot.'includes/footer.php';
?>
<?php
$pathToRoot = '../';
include $pathToRoot . 'includes/db.php';
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAK - <?php echo $_SESSION['post_title']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/blog-hot.css">
    <style type="text/css">
        .dropimg {
            vertical-align: middle;
            object-fit: cover;
            width: 90px;
            height: 80px;
            border-radius: 50%;
            margin-right: 10px;
            border-color: #3e8e41;
            float: left;
        }
    </style>


</head>

<body style="background-color:white;">

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
            <a href="" class="mb-4 nav-link m-2 nav-sign-in" data-toggle="dropdown"><i class="fa fa-user"></i> Sign In</a>
            <?php include '../includes/modal.php' ?>
        </nav>

        <!-- End of Navbar -->


    </header>
    <!-- end of header -->

    <!-- Page Content -->
    <div class="container p-5" style="width:900px; margin:0 auto;">


    <?php




$post_id = $_GET['post_id'];


$query = "SELECT * FROM posts WHERE post_id = '$post_id' ";
$post_query = mysqli_query($connection, $query);


if(!$post_query){
    die("QUERY FAILED" .    mysqli_error($connection));
}
$count = mysqli_num_rows($post_query);





$row = mysqli_fetch_assoc($post_query);


$post_title = $row['post_title'];
$_SESSION['post_title'] = $post_title;
$post_author = $row['post_author'];
$post_date = $row['post_date'];
$post_image = $row['post_image'];
$post_content = $row['post_content'];
$post_tags = $row['post_tags'];


$query2 = "SELECT * FROM users WHERE User_name = '$post_author' ";
$post_query2 = mysqli_query($connection, $query2);
$row2 = mysqli_fetch_assoc($post_query2);
$author_img = $row2['user_image'];


echo "<div class='mt-5 mb-3' style='text-align: center;'>
<h1 style='font-family: Verdana; color:black;'>{$post_title}</h1>
</div>
<div class='mt-2'>
<img src='{$post_image}' alt=''>
</div>


</div>
<div class='mb-5 ml-5'>
<img src='data:image/jpeg;base64,".base64_encode($author_img)."' class='dropimg'>
<h3 style='float: left;'>{$post_author}</h3>
</div>
<div class='mb-5 mt-2' style='width:900px; margin:0 auto;'>
<p>{$post_content}</p>
</div>";

?>

    <hr>
    <div class="mb-5" style="width:900px; margin:0 auto; padding-bottom: 200px;">
        <div style="display: flex;">
            <div style="float:left; margin-right: 10px;">
                <a href="../RegistrationPage/RegisterPage.php" style="font-size: 100px; padding-left:100px;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
            </div>
            <div style="float: left; font-size: 100px;">
                <span id="clicks">0</span>
            </div>
            <div style="float:left; margin-right: 10px;">
                <a href="../RegistrationPage/RegisterPage.php" style="font-size: 100px; padding-left:300px;"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
            </div>
            <div style="float: left; font-size: 100px;">
                <span id="clicks2">0</span>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        var clicks = 0;
var clicks2 = 0;
        function onClick() {
            clicks += 1;
            document.getElementById("clicks").innerHTML = clicks;
        };
        function onClick2() {
            clicks2 += 1;
            document.getElementById("clicks2").innerHTML = clicks;
        };
    </script>
    <?php
    $pathToRoot = '../';
    include $pathToRoot . 'includes/footer.php';
    ?>
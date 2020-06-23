
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

        <title>TAK - Registered</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.7/css/uikit.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Montserrat&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Logged-in-style.css">

    </head>

    <body>





        <?php

        session_start();

        if(isset($_POST['signup'])){
            $name = $_POST['name'];
            $email = $_POST['email'];

            $pass = $_POST['pass'];

            $repass = $_POST['re_pass'];








            $query = "INSERT INTO users(User_name, User_email, User_password) VALUES ('$name', '$email', '$pass')";
            $register_query = mysqli_query($connection, $query);


            if(!$register_query){
                die("QUERY FAILED" .    mysqli_error($connection));
            }

            else{



                echo '<script>window.location.href="../UserPages/user-home.php";alert("Welcome!");</script>';
                $_SESSION['user_name'] = $name;


            }



        }






        ?>






    </body>
</html>
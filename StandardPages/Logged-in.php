<?php session_start(); ?>
<?php 
 $pathToRoot = '../';
 include $pathToRoot.'includes/db.php';
?>


        <?php



        if(isset($_POST['Login'])){
            $username = $_POST['username'];
            $pass = $_POST['password'];



            $query = "SELECT * from users WHERE User_name ='$username' AND User_password = '$pass'";
            $login_query = mysqli_query($connection, $query);



            // if(!$login_query){
            //     die("QUERY FAILED" .  mysqli_error($connection));
            // }
            $count = mysqli_num_rows($login_query);

            if($count == 0){
                
                echo '<body style="background-color:black;"><script>window.location.href="../index.php";alert("User does not exist!");</script></body>';
                
            } else{



                $row = mysqli_fetch_assoc($login_query);
                $user_name = $row['User_name'];
                $user_img= $row['user_image'];
                $_SESSION['user_name'] = $row['User_name'];
                $_SESSION['user_image'] = $row['user_image'];
                $_SESSION['user_email'] = $row['User_email'];


                echo '<script>window.location.href="../UserPages/user-home.php";alert("Welcome!");</script>';
                    ;



            }



        }



        ?>


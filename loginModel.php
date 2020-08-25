<?php
 session_start();

     $hostname = "localhost";
    $username = "root";
    $password = "admin1";
    $dbname = "blog";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$conn){
        die("Connection feiled" . mysqli_connect_error());
    }else {
        echo "Connected" . "<br>";

    }



     $email = htmlspecialchars(trim($_POST['email']));
     $password = md5($_POST['password']);

     $query = "SELECT * FROM utilisateur WHERE email='$email' && password='$password'";
     echo $query;
     $user = mysqli_query($conn, $query);

    // Check at least there's one row user exists

    if (mysqli_num_rows($user) > 0){

        while($row = mysqli_fetch_array($user)){
            // Check if data match

            if ($row['email'] == $email && $row['password'] == $password){
                // Set super global variables session
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['postID'] = $row['user_id'];
                echo $_SESSION['email'];

                // Redirect to posts page
                header("Location: publication.php");

            }
        }
    }

    echo $_SESSION['email'];





?>

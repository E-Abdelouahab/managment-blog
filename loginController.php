<?php
 session_start();
    $_SESSION['postID'];
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

      if(isset($_POST['register'])){
		   if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])){
			 $username = htmlspecialchars(trim($_POST['username']));
			 $email = htmlspecialchars(trim($_POST['email']));
       $_SESSION['email'] = $email;
			 $password = md5($_POST['password']);
			 $cpassword = md5($_POST['cpassword']);

			 if($password == $cpassword){
			   $sql = "INSERT INTO utilisateur  VALUES(NULL,'$username', '$email', '$password', '$cpassword')";
               mysqli_query($conn, $sql);
               header("Location: login.php");

			 } else{
               echo "The two password do not match";
             }
		   }else{
			   echo "il faut saisir tous les champs";
		   }
	   }



?>

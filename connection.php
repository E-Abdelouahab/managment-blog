<?php
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


   mysqli_close($conn);
   ?>

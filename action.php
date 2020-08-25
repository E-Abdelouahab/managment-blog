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

   $image = $_POST['image'];
   $description = $_POST['description'];
   $date = $_POST['date'];
   $category = $_POST['category'];
   $title = $_POST['title'];

    // Get Post id from users table
    $email = $_SESSION['email'];
    echo $email;
    $getPid = "SELECT user_id, email FROM utilisateur WHERE email='$email';";
    echo $getPid;

    // Debugging
    echo $getPid;

    $getPidResult = mysqli_query($conn, $getPid);
    while ($row = mysqli_fetch_array($getPidResult)){
        if ($row['email'] == $email){
            $_SESSION['postID'] = $row['user_id'];
            // Query for insert data into table
          $sql = 'INSERT INTO publication (image, description, date, category, user_id, title) VALUES ("' . $image . '",'. '"' . $description . '",' . '"' . $date . '",' . '"' . $category . '",' . '"' . $_SESSION['postID'] . '",'. '"' . $title . '");';
            echo $sql;

            echo "<br> Done <br>";
            // execute query insert data
            mysqli_query($conn, $sql) or die("Error " . mysqli_error($conn));


            // Redirect to
            header("Location: publication.php");
        }
    }

?>

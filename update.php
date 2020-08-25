<?php
    session_start();

    //  Coonection file
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


    // Get data from user
    $image = $_POST['image'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $id = $_SESSION['id'];

    // Check user data
    if (isset($_POST['edit'])){


        // echo 'Email Address seems new !';
        $sql = "UPDATE publication SET image='" . $image . "', description='" . $description . "', date='" . $date . "', category='" . $category . "', title='" . $title . "' WHERE pub_id='" . $id . "';";
        echo $sql;
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn);
        }

        // execute query  insert data
        mysqli_query($conn, $sql) or die("Error: " .$conn);

        // close connection
        $conn->close();

        // Redirect to posts page
        header("Location: publication.php");

    }else{
        echo "Data does not updated !";
    }
?>

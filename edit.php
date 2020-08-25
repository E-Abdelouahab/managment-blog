<?php


     session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "admin1";
    $dbname = "blog";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

  /*if(!$conn){
        die("Connection feiled" . mysqli_connect_error());
    }else {
        echo "Connected" . "<br>";
    }*/


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>gestion blog</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->

    <link rel="stylesheet" href="add.css">


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">Publication</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item active">
     <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active">
     <a class="nav-link" href="#">Contact us <span class="sr-only">(current)</span></a>
   </li>
 </ul>
 <form class="form-inline ">
     <div class="button">
       <a href="login.php"><span>Log out</span></a>
     </div>
 </form>
</div>
</nav>

<?php 
$id = $_GET['id'];
$posts = "SELECT * FROM publication WHERE pub_id = $id;";
                  $all_posts = mysqli_query($conn, $posts);
                    while ($row = mysqli_fetch_array($all_posts)) {
                   

 echo '  <section class="section">
        <div class="wrapper">
            <h2>Edit Publication</h2>
            <form action="update.php" method="POST">
                <div class="input-field">
                    <input type="text"  name="image" required=">
                    <label>Image</label>
                </div>

                <div class="input-field">
                    <input type="text" value="'. $row["title"] .'" name="title" required>
                    <label>Title</label>
                </div>

                <div class="input-field">
                    <input type="text" value="'. $row["category"] .'" name="category" required>
                    <label>Category</label>
                </div>

                <div class="input-field">
                    <input type="text" name="date" value="'. $row["date"] .'" required>
                    <label>Date</label>
                </div>

                <div class="input-field">
                    <textarea type="text" name="description" value="'. $row["description"] .'" required></textarea>
                    <label>Description</label>
                </div>
                <input type="submit" name="edit" value="Send Message" class="btn">
            </form>
        </div>
    </section>';


 
                    }
                        
                        ?>

  


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $("input").focus(function () {
            $(this).parent().addClass("focus")
        })

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>

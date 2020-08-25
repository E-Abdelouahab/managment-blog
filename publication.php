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

   
    <link rel="stylesheet" href="publication.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color:chocolate ;">
<a class="navbar-brand" href="#">Publication</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#contact">Contact us <span class="sr-only">(current)</span></a>
    </li>
  </ul>
  <form class="form-inline ">

      <div class="button">
        <a href="login.php"><span>Log Out</span></a>
      </div>

  </form>
</div>
</nav>


<section style="margin-top: 30px">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-auto">
    <div class="button">
      <a href="add.php"><span>Add New Publication</span></a>
    </div>
    </div>
 </div>
</div>
</section>

    <section class="section1">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                <?php
                  $posts = "SELECT * FROM publication;";
                  $all_posts = mysqli_query($conn, $posts);
                    while ($row = mysqli_fetch_array($all_posts)) {
                    // if ($row['written_by'] == $username){
                        //  echo "Username: " . $username;
                         echo "
                    <div class='col-sm-4'>
                        <div class='card' style='margin-top:20px'>
                            <div class='icone'>
                                <a href='edit.php?id=".$row['pub_id']."'><i class='fa fa-edit'></i></a>
                                <a href='delete.php?id=".$row['pub_id']."'><i class='fa fa-trash'></i></a>
                            </div>
                            <div class='post-image'>
                                <img src='". $row['image']."' class='img-responce' width='100%' height='100%'>
                            </div>
                            <div class='news-content'>
                                <span class='category'>". $row['category'] ."</span>
                                <div class='post-meta'>
                                    <span class='author'>
                                        <a href='#'>
                                            <i class='fa fa-user' aria-hidden='true'></i>Someone Famous
                                        </a>
                                    </span>
                                    <span class='timer'>
                                        <a href='#'>
                                            <i class='fa fa-clock' aria-hidden='true'></i>". $row['date']. "
                                        </a>
                                    </span>
                                    <span class='comments pull-right'>
                                        <a href='#'>
                                            <i class='fa fa-commenting-o' aria-hidden='true'></i>24
                                        </a>
                                    </span>
                                    <div class='clearfix'></div>
                                </div>
                                <h2 class='post-header'>". $row['title']."</h2>
                                <p>". $row['description']."</p>
                            </div>
                        </div>
                    </div>";
                    //}
                 }

               //   echo "FinalEditPid : " . $_SESSION['EditPid'];
               ?>

                </div>
            </div>
        </div>
    </section>


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

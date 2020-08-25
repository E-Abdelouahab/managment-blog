<?php
  session_start();

  $hostname = "localhost";
  $username = "root";
  $password = "admin1";
  $dbname = "blog";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  $_SESSION['email'] = null;
    $_SESSION['postID'] = null;
    $_SESSION['username'] = null;

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

 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <link rel="stylesheet" href="index.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#">Publication</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline ">
      <div class="buttn">
        <div class="button">
          <a href="login.php"><span>Log In</span></a>
        </div>
        <div class="button">
          <a href="login.php"><span>Log Up</span></a>
        </div>
      </div>
    </form>
  </div>
</nav>


  <!-- Marketing messaging and featurettes
  ================================================== -->
<section class="news">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-12 col-xl-6">
       <div class="card"style=" border:none;" >
          <img src="uploads/card1.jpg" class="card-img-top" alt="..." height="500" width="273">
          <div class="card-body">
            <h3 class="card-title">How to create your social media</h3>
            <p class="card-text">I never planned to work in tech; after studying journalism, I was all set for a career as a foreign correspondent for a print newspaper. Sadly, I graduated at the peak of the economic crisis, and the severe decline in print media.</p>
            <a href="#" class="btn btn-primary" >Read Story</a>
          </div>
        </div>
      </div>


      <div class="col-12 col-sm-12 col-xl-6" style="margin-top:30px;">
        <div class="card mb-3" style="max-width: 540px; border:none;">
           <div class="row no-gutters">
              <div class="col-md-4">
                <img src="uploads/profile-1.jpg" class="card-img" alt="..." height="229px" width="229px">
              </div>
              <div class="col-md-8">
                 <div class="card-body">
                     <h5 class="card-title">Webinar</h5>
                     <p class="card-text">Agricultural technology or agrotechnology (abbreviated agritech, AgriTech, or agrotech) is the use of technology in agriculture, horticulture, and aquaculture[1] with the aim of improving yield, efficiency, and profitability. Agricultural technology can be products, services or applications derived from agriculture that improve various input/output processes.</p>
                     <a class="card-text"style="color:blue;
                     font-family: 'Montserrat SemiBold', sans-serif;
                      font-size: 17px;">Read More</a>
                 </div>
              </div>
           </div>
        </div>

        <div class="card mb-3" style="max-width: 540px; border:none;">
           <div class="row no-gutters">
              <div class="col-md-4">
                <img src="uploads/profile-2.jpg" class="card-img" alt="..." height="229px">
              </div>
              <div class="col-md-8">
                 <div class="card-body">
                     <h5 class="card-title">Technology</h5>
                     <p class="card-text">Technologie is the second album released in 2007 by the alternative rock band Black Lab. It consists of several new tracks, remixes of some songs that appeared on the album See the Sun, a song that previously had been released on the soundtrack to Blade: Trinity ("This Blood") and a cover of the theme song to Transformers.</p>
                     <a class="card-text"style="color:blue;
                     font-family: 'Montserrat SemiBold', sans-serif;
                      font-size: 17px;">Read More</a>
                 </div>
              </div>
           </div>
        </div>

        <div class="card mb-3" style="max-width: 540px; border:none;">
           <div class="row no-gutters">
              <div class="col-md-4">
                <img src="uploads/profile-3.jpg" class="card-img" alt="..." height="229px">
              </div>
              <div class="col-md-8">
                 <div class="card-body">
                     <h5 class="card-title">Blog Post</h5>
                     <p class="card-text">No More Free Lunch: Working at a Tech Company Will Never Be the Same</p>
                     <a class="card-text"style="color:blue;
                     font-family: 'Montserrat SemiBold', sans-serif;
                      font-size: 17px;">Read More</a>
                 </div>
              </div>
           </div>
        </div>

      </div>
    </div>
  </div>
</section>


  <!-- Three columns of text below the carousel -->
  <section class="section1">
    <div class="container-fluid">
      <h2>ALL PUBLICATION</h2>
      <div class="container">

        <div class="row">
        <?php
          $posts = "SELECT * FROM publication;";
          $all_posts = mysqli_query($conn, $posts);
            while ($row = mysqli_fetch_array($all_posts)) {
            // if ($row['written_by'] == $username){
                //  echo "Username: " . $username;
                 echo "
          <div class='col-12 col-sm-6 col-xl-4'>
            <div class='card-pub'>
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
                      <i class='fa fa-clock' aria-hidden='true'></i>". $row['date']."
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

       }


        ?>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container" id="contact">
   <div class="row">
     <div class="col">
       <div class="wrapper">
           <h2>CONTACT US</h2>
           <form  method="POST">
               <div class="input-field">
                   <input type="text" name="" required="">
                   <label>First Name</label>
               </div>

               <div class="input-field">
                   <input type="text" name="" required="">
                   <label>Last Name</label>
               </div>

               <div class="input-field">
                   <input type="text" name="" required="">
                   <label>Email</label>
               </div>

               <div class="input-field">
                   <input type="text" name="" required="">
                   <label>Phone</label>
               </div>
               <div class="input-field">
                   <textarea type="text" name="" required=""></textarea>
                   <label>Message</label>
               </div>
               <input type="submit" name="" value="Send Message" class="btn">
           </form>
       </div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>

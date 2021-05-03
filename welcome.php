<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Welcome! </title>
</head>

<body>
  <?php require 'helper/_nav.php' ?>

  <div class="alert alert-success my-1" role="alert">
    <h4 class="alert-heading">Welcome! <?php echo $_SESSION['email']?></h4>
    <p>Hello! , Welcome To Fish Expresss, You have successfully entered to our site and before you logout make sure you
      get as much benefits as you can from ' Fish Express ', And dont forget to drop your Feedback as it helps us in
      improving...</p>
    <!-- <hr>
    <p class="mb-0">Great Fish deals at great offers are waiting just for you, So instead of wasting the time quickly go
      to seller section and buy the fish you want but dont forget to visit all sections of our site and please drop your
      Feedback as it helps us in improving...</p> -->
  </div>

  <!-- <div class="container"> -->
  <!-- <div class="row justify-content-center"> -->
  <!-- <div class="my-1">  -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/Yellow Fish.png" class="d-block w-100" alt="" >
        <!-- <img src="https://source.unsplash.com/1400x480/?fish,fishes" class="d-block w-100" alt="..."> -->
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x480/?fish,fishmeat,fishes" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x480/?fisherman,port" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!-- </div> -->
  </div>
  <!-- </div> -->
  <!-- </div> -->


  <div class="container mt-5">
    <div class="row ">
      <div class="col-lg-4 text-center">
        <img src="image/fishing-man.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Seller</h2>
        <p>If you have your own fish farm or you go to fishing and wants to meet your buyers directly without a middle
          man and sell your fishes to them, then this is a right platform for you, for more details View More...</p>
        <p><a class="btn btn-warning" href="/miniproject/aboutUs.php" role="button">View More »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="image/Businessman.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Fish Express</h2>
        <p>We provide a common fisherman or a fish farmer to sell his fishes directly to buyers who is willing to buy
          fishes from seller, Here there is no involvement of Fish Express or any middle man in the deals, for more
          details View More....</p>
        <p><a class="btn btn-primary" href="/miniproject/aboutUs.php" role="button">View More »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <img src="image/fish-seller.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Buyer</h2>
        <p>If you are a retail or wholesale seller of fish or wants to buy a more quantity of quality fishes directly
          from fisherman or fishfarmers without middle man then this is a right platform for you, for more details View
          More...</p>
        <p><a class="btn btn-danger" href="/miniproject/aboutUs.php" role="button">View More »</a></p>
      </div>
    </div>
  </div>

  <footer class="container text-center mt-2">
    <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
    <p>© 2020-2021 Fish Express Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>


</body>

</html>
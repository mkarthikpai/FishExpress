<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
 $loggedin = true;
}
else{
  $loggedin = false;
}
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/miniproject"><img src="image/logo.png" height="65px"  alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/miniproject/welcome.php">Home <span class="sr-only">(current)</span></a>';

      if(!$loggedin){
        echo'</li>
      <li class="nav-item active">
        <a class="nav-link" href="/miniproject/login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/miniproject/index.php">SignUp</a>
      </li>';

      }

      if($loggedin){
        echo '
        <li class="nav-item active">
        <a class="nav-link" href="/miniproject/aboutUs.php">About Us</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="/miniproject/sellerSection.php">Seller</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="/miniproject/buyerSection.php">Buyer</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="/miniproject/feedback.php">Feedback</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="/miniproject/logout.php">Log Out</a>
        </li>';
      }
     
     
     echo'</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>';

  
?>
<?php

$result = false;
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

//Connecting Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "fishexpress";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneno = $_POST["phno"];
    $address = $_POST["address"];
    $compname = $_POST["compname"];
    $fishname = $_POST["fishname"];
    $fishqty = $_POST["fishqty"];
    //$fish2 = $_POST["fish2"];
    //$fish3 = $_POST["fish3"];
    $sql = "INSERT INTO `buyer` ( `name`, `email`, `phno`, `address`, `compname`, `fishName`, `fishQty`, `time`) VALUES ( ' $name', '$email', '$phoneno', '$address', '$compname', ' $fishname', '$fishqty', current_timestamp())";
    $result = mysqli_query($conn, $sql);

   
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
    <link rel="stylesheet" href="style.css">

    <title>Buyer</title>
</head>

<body>
    <?php require 'helper/_nav.php' ?>

    <?php
      if($result){

           $d = strtotime(" +2 Days");
        
          echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been successfully submited, The seller You mentioned below will be sending you the details soon and you can expect delivery by '. date("d-m-Y h:i:sa", $d) .' ...
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>'; 
        }
    ?>

    <div class="container">
        <!-- <div class="row g-3"> -->
        <!-- <div class="col-md-5 col-lg-4 order-md-last mt-3">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Total Cost</span>

                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">First Product</h6>

                        </div>
                        <span class="text-muted">Rs 12 /kg</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Second product</h6>

                        </div>
                        <span class="text-muted">Rs 8 /kg</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Third Product</h6>

                        </div>
                        <span class="text-muted">Rs 5 /kg</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">−$5</span>
                    </li> -->
        <!-- <li class="list-group-item d-flex justify-content-between">
                        <span>Total (INR)</span>
                        <strong>Rs 20</strong>
                    </li>
                </ul>
            </div> -->


        <!-- <div class="col-md-7 col-lg-8 mt-3"> -->
        <h4 class="mb-3 mt-3">Buyer Details</h4>
        <form  action="/miniproject/buyerSection.php" method="post">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="25"
                        placeholder="Enter Your Name" required>
                    
                </div>

                <div class="col-sm-6">
                    <label for="phno" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phno" name="phno" maxlength="12"
                        placeholder="Enter Your Ph Number" required>
                </div>
                <div class="col-sm-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" maxlength="30"
                        placeholder="Enter Your Email" required>
                </div>



                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address"
                        maxlength="100" required>
                    <!-- <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div> -->
                </div>

                <div class="col-12">
                    <label for="compname" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="compname" name="compname" maxlength="25"
                        placeholder="Enter Company Name, From Whom You Want To Buy" required>
                </div>

                <div class="container mt-3">
                    <h5>Enter Fish Name And Quantity You Want To Buy From Mentioned Seller </h5>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="fishname" class="form-label">Fish Name</label>
                    <input type="text" maxlength="15" class="form-control" id="fishname" name="fishname"
                        placeholder="Enter Fish Name" required>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="fishqty" class="form-label">Fish Quantity (Kg)</label>
                    <input type="number" maxlength="12" class="form-control" id="fishqty" name="fishqty"  min="1"
                        placeholder="Enter Value (Eg -5)" required>
                </div>

                <!-- <div class="col-md-6">
                    <label for="fish3" class="form-label">Fish 3</label>
                    <input type="number" maxlength="15" class="form-control" id="fish3" name="fish3"  min="1"
                        placeholder="Enter Value (Eg -5)" required>
                </div> -->







            </div>

            <hr class="my-4">


            <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
        </form>
        <!-- </div> -->
        <!-- </div> -->
    </div>


    <!-- <footer class="container text-center mt-5"> -->

    <!-- <p>© 2020-2021 Fish Express Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p> -->
    <!-- </footer>  -->
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020-2021 Fish Express Company, Inc. <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>
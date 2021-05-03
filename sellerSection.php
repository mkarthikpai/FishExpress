<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

$result = false ;

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
  $phoneno = $_POST["phoneno"];
  $address = $_POST["address"];
  $compname = $_POST["compname"];
  $fish1 = $_POST["fish1"];
  $rate1 = $_POST["rate1"];
  $fish2 = $_POST["fish2"];
  $rate2 = $_POST["rate2"];
  $fish3 = $_POST["fish3"];
  $rate3 = $_POST["rate3"];
 // $sql = "call adddata($name,$email,$phoneno,$address,$compname,$fish1,$rate1,$fish2,///$rate2,$fish3,$rate3)";

  $sql = "call adddata('$name','$email','$phoneno','$address','$compname','$fish1','$rate1','$fish2','$rate2','$fish3','$rate3')";
   $result = mysqli_query($conn, $sql);
  //  if($result == 1){
  //    echo "Successfully added";
  //  }else{
  //    echo"Not added";
  //  }
  

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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


  <title>Seller</title>
</head>

<body>
  <?php require 'helper/_nav.php' ?>

  <?php
     if($result){
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your entry has been successfully submited, And has been listed below, If any customer is willing to buy from you, We will send details to your mobile number immediately...
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }
      // else {
      // echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
      // <strong>Error!</strong> We are facing technical issues and  Your entry was not successfully submited...
      // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      //   <span aria-hidden="true">&times;</span>
      // </button>
      // </div>';
      // } 
    ?>



  <div class="container mt-3">


    <h3>Lists Of Fishes Currently Available</h3>
    <table class="table " id="myTable">
      <thead>
        <tr>

          <th scope="col">Name</th>
          <th scope="col">Company Name</th>
          <th scope="col">Place</th>
          <th scope="col">Fish</th>
          <th scope="col">Rate/Kg</th>
          <th scope="col">Fish</th>
          <th scope="col">Rate/Kg</th>
          <th scope="col">Fish</th>
          <th scope="col">Rate/Kg</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM seller";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)) { 
            echo "<tr>
            <td>". $row['name'] ."</td>
            <td>". $row['compname'] ."</td>
            <td>". $row['address'] ."</td>
            <td>". $row['fish1'] ."</td>
            <td>". $row['rate1'] ."</td>
            <td>". $row['fish2'] ."</td>
            <td>". $row['rate2'] ."</td>
            <td>". $row['fish3'] ."</td>
            <td>". $row['rate3'] ."</td>
            </tr>";
          }
        
        ?>

      </tbody>

    </table>


  </div>


  <div class="container mt-5">
    <h2>Enter The Details Correctly</h2>

    <form action="/miniproject/sellerSection.php" method="post">
      <div class="row g-3 mt-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" maxlength="30" class="form-control" id="name" name="name" placeholder="Enter Your Name"
            required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" maxlength="30" class="form-control" id="email" name="email" placeholder="Enter Email"
            required>
        </div>
        <div class="col-md-6">
          <label for="phoneno" class="form-label">Phone No</label>
          <input type="tel" maxlength="12" class="form-control" id="phoneno" name="phoneno" placeholder="Enter Ph No"
            required>
        </div>
        <div class="col-md-6">
          <label for="address" class="form-label">Address</label>
          <input type="text" maxlength="50" class="form-control" id="address" name="address"
            placeholder="Enter City And State" required>
        </div>
        <div class="col-md-6">
          <label for="compname" class="form-label">Company Name</label>
          <input type="text" maxlength="25" class="form-control" id="compname" name="compname"
            placeholder="Enter Company Name" required>
        </div>

        <div class="container mt-2">
          <h2>Enter Fish Details Correctly</h2>
          <div class="row mt-2">
            <div class="col-md-6">
              <label for="fish1" class="form-label">Fish 1</label>
              <input type="text" maxlength="15" class="form-control" id="fish1" name="fish1"
                placeholder="Enter Fish Name" required>
            </div>
            <div class="col-md-6">
              <label for="rate1" class="form-label">Rate/Kg</label>
              <input type="text" maxlength="5" class="form-control" id="rate1" name="rate1"
                placeholder="Enter Fish Rate/Kg" required>
            </div>
            <div class="col-md-6">
              <label for="fish2" class="form-label">Fish 2</label>
              <input type="text" maxlength="15" class="form-control" id="fish2" name="fish2"
                placeholder="Enter Fish Name" required>
            </div>
            <div class="col-md-6">
              <label for="rate2" class="form-label">Rate/Kg</label>
              <input type="text" maxlength="5" class="form-control" id="rate2" name="rate2"
                placeholder="Enter Fish Rate/Kg" required>
            </div>
            <div class="col-md-6">
              <label for="fish3" class="form-label">Fish 3</label>
              <input type="text" maxlength="15" class="form-control" id="fish3" name="fish3"
                placeholder="Enter Fish Name" required>
            </div>
            <div class="col-md-6">
              <label for="rate3" class="form-label">Rate/Kg</label>
              <input type="text" maxlength="5" class="form-control" id="rate3" name="rate3"
                placeholder="Enter Fish Rate/Kg" required>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-danger btn-block mt-4">Submit</button>
      </div>
    </form>
  </div>


  <footer class="container text-center mt-4">
    <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
    <p>© 2020-2021 Fish Express Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>


</body>

</html>
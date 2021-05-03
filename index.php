<?php
$showError = false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
   
    include 'helper/_dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exists1 = false;
    //$exists2 = false;

    //Check Whether the data already exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows  > 0){
       // $exists = true;
       $showError = "Username Or Email Already exists...";
    }
    else{
        //$exists = false;
        if($password == $cpassword) {
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `email`, `password`, `dt`) VALUES ( '$username', '$email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
    }
    else{
        $showError = "Passwords Dont Match ";
    }
  }  
}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Sign Up</title>
</head>

<body>
    <?php require 'helper/_nav.php' ?>
    <?php
      if($showAlert){

        echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your Account Is Now Created And You Can Login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
     }
      if($showError){

        echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '. $showError .'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>';
     }
    ?>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-5">

                <div class="border border-info mt-4 rounded my_form">
                    <div class="text-center my-3">

                        <img class=" rounded" src="image/Logo.png" alt="" width="200" height="200">
                        <h4>Sign In To Fish Express</h4>
                    </div>

                    <form action="/miniproject/index.php" method="post">
                        <div class="mb-3">
                            <label for="username">User Name</label>
                            <input type="text" maxlength="15" class="form-control" id="username" name="username"
                                placeholder="Enter UserName">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" maxlength="35" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" placeholder="Enter Email">

                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" maxlength="25" class="form-control" id="password" name="password"
                                placeholder="Enter Password">
                        </div>
                        <div class="mb-3">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword"
                                placeholder="Confirm Password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>


</body>
</html>
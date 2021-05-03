<?php
$showError = false;
 $login = false;
if($_SERVER["REQUEST_METHOD"]== "POST"){
   
    include 'helper/_dbconnect.php';
    // $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    
    
    // $sql = "Select * from users where email = '$email' AND password = '$password'";
    $sql = "Select * from users where email = '$email'";
    // $value = "Select username from users Where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($password, $row['password'])){

                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true ;
                    $_SESSION['email'] = $email;
                   
                    header("location: welcome.php");
                }
                else{
                    $showError = "Invalid Credentials";
                }
            }
           
        }
   
    else{
        $showError = "Invalid Credentials";
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

    <title>Login</title>
</head>

<body>
    <?php require 'helper/_nav.php' ?>
    <?php
      if($login){

        echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You are logged in.
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
            <div class="col-lg-4">

                <div class="border border-info mt-5 rounded my_form">
                    <div class="text-center my-3">

                        <img class=" rounded" src="image/Logo.png" alt="" width="200" height="200">
                        <h4>Login To Fish Express</h4>
                    </div>

                    <form action="/miniproject/login.php" method="post">
                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1">UserName</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter UserName">
                        </div> -->
                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" placeholder="Enter Email">
                            
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">LogIn</button>

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
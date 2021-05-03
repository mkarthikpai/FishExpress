<?php
$result = false;

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

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
    $rating = $_POST["rating"];
    $text = $_POST["text"];
    $sql = "INSERT INTO `feedback` (`name`, `ratings`, `text`) VALUES ('$name', '$rating', '$text')";
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

    <title>Thank You! </title>
</head>

<body>
    <?php require 'helper/_nav.php' ?>

    <div class="starter-template text-center py-5 px-3">
        <h1>Fish Express Thanks You!</h1>
        <p class="lead">We Thank You For Visiting Our Site Fish Express.<br> Hope You Were Much More Benefitted From Our
            Site Than What You Thought Of.<br> But We would Like To Hear It From You Itself.<br> So Please Drop Your
            Suggestions In The Below Form.<br>Please Give Us A True Feedback, Because It Helps Us To Improve A Lot...
        </p>
    </div>

    <div class="container">
        <div class="bg-light p-2 rounded">
            <h1>Announcement!</h1>
            <p class="lead">Fish Express is a free platform for a fish buyer and a seller but if you wish to donate some
                money, you can donate us as it helps our organization to do many more things like this and contribute it
                to our society, Our details are <b> Account Number 123456789, Bank Name XYZ</b> , Thank You. For any
                query feel free to contact <b> 9457214638 </b> or <b> fishexpress@gmail.com ...</b></p>

        </div>
    </div>

    <div class="container mt-3">
        <?php
            if($result){
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been successfully submited, Thanks for your valuable feedback!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }
        ?>
    </div>
    

    <div class="container card-body mt-3 px-lg-5">
        <h3>Feedback Form</h3>
        <form action="/miniproject/feedback.php" method="POST">

            <p>Please Fill This Form</p>

            <div class="md-form mt-3">
                <label for="name">Name</label>
                <input type="text" maxlength="25" id="name" name="name" placeholder="Enter Your Name"
                    class="form-control" required>
            </div>

            
            <div class="md-form mt-3">
                <label for="rating">Ratings</label>
                <p>Enter 1 For Best, 2 For Good, 3 For Poor</p>
                <input type="number" id="rating" name="rating" placeholder="Enter Your Rating (Eg - 1)" min="1" max="3"
                class="form-control" required>
            </div>
            
            <div class="md-form mt-3">
                <label for="text">Feedback</label>
                <input type="text" maxlength="50" id="text" name="text" placeholder="Enter Your Feedback"
                    class="form-control" required>
            </div>
            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block  mt-3 waves-effect" type="submit">Sign in</button>

        </form>



    </div>


    <footer class="container text-center mt-2">
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
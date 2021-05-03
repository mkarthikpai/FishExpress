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
    <link rel="stylesheet" href="style.css">

    <title>About Us</title>
</head>

<body>
    <?php require 'helper/_nav.php' ?>

    <div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center ">
            <div class="col-md-7 ">
                <h2 class="featurette-heading">Fish Express. <span class="text-muted">It’ll started in 2020,</span></h2>
                <p class="lead">When the fish breeders or fish farmers where facing a heavy loss due to heavy earnings
                    or cheating made by middle men or brokers, we Fish Express as a team were thinking of all possible
                    ways of helping the fish farmers, So we brought this platform, Where a fish farmer can directly make
                    his deals to the customer without involving a middle man, even we Fish Express will not indulge in
                    any matters, Its a dirrect communication between seller and a buyer.This is a free platform , we
                    dont charge any money , and also any inconvenience for buyer with seller/seller with the buyer
                    <b>Fish Express</b> would not be responsible as we just provide you a platform and make a connection
                    between buyer and a seller, For more details on <b>Seller</b> or <b>Buyer</b> read below details...
                </p>
            </div>
            <div class="col-md-5 ">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?fisherman" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center ">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">As A Seller. <span class="text-muted">In Fish Express,</span></h2>
                <p class="lead">Here we provide a seller a form to insert his/her details like name, address, types of
                    fishes he has,... etc in the <b>Seller Section</b> , So depending upon what details you put we will
                    be uploading it in this section and a person who visit our site as a buyer will be looking at this
                    uploads and if he's intrested in buying those fishes then he will be submitting his details to us
                    mentioning the name of the seller whom a buyer wants to contact, and the details about fishes a
                    customer wants will be shared to your entered mobile no so that you can contact them directly and
                    meet your customer and make your deals, Any inconvenience during your deals with the buyers then
                    <b>Fish Express</b> would not be responsible as we just provide platform for buyers and sellers.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?fish" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center ">
            <div class="col-md-7 ">
                <h2 class="featurette-heading">As A Buyer. <span class="text-muted">In Fish Express,</span></h2>
                <p class="lead">We provide buyer a form where he/she can enter their basic details in <b>Buyer</b>
                    section, looking at a seller section depending on which seller you would like to buy fishes, you
                    must just enter thier details along with your basic details and Fish Express would collect those
                    details and will be sending it to those seller you mentioned in that form and later that seller
                    would directly contact you to make deals with you, But make sure you select those seller who resides
                    near to your place or you can contact easily, Any inconvenience during your deals with the seller
                    then <b>Fish Express</b> would not be responsible as we just provide platform for buyers and
                    sellers.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?fishmarket" alt="">
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
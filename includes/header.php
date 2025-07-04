<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Secular One' rel='stylesheet'>
    <link rel="stylesheet" href="bootstrap/style.css">

</head>
<body>
    <div class="navbar navbar-home navbar-expand-lg" id="navbar">
        <div class="logo">
            <a href="index.php"><img src="bootstrap/images/nav-logo.webp" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <div class="menu navbar-nav  nav-gap">
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <!-- <a href="">Activities</a> -->
                <!-- <a href="#">Gallery</a> -->
                <!-- <a href="#">Destinations</a>
                <a href="#">Blog</a> -->
                <a href="contact-us.php">Contact</a>
                <a href="#" class="reservation-btn">Reservation</a>
            </div>
        </div>


    </div>
    <script>
       document.addEventListener("DOMContentLoaded",function(){
        let isHomepage = "<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'true' : 'false' ;?>";
        if (isHomepage === "true"){

               document.getElementById("navbar").classList.add("navbar-home");
       }
                else{
            document.getElementById("navbar").classList.remove("navbar-home");

                    document.getElementById("navbar").classList.add("navbar-white");
                }});
    </script>
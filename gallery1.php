<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Men Salon Management System || Contact Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
       .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px auto;
}

.gallery-item {
    margin: 10px;
    width: 300px;
    height: 300px; /* Set a fixed height for each gallery item */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-item img {
    width: 100%;
    height: 100%; /* Ensure the image fills the gallery item */
    object-fit: cover; /* Maintain aspect ratio and cover the entire area */
    display: block;
}


    </style>
</head>

<body>
    <?php include_once('includes/header.php');?>
    
    <div class="gallery">
        <div class="gallery-item">
            <img src="satyam/1.jpg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="satyam/2.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="satyam/3.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="satyam/4.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="satyam/5.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="satyam/6.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="satyam/7.jpg" alt="Image 3">
        </div>
        <div class="gallery-item">
            <img src="satyam/8.jpg" alt="Image 3">
        </div>
    </div>

    

   <?php include_once('includes/footer.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>


</body>

</html>

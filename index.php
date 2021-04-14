<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/css/half-slider.css" rel ="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/half-slider.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  <script src="assets/js/source.bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <title>MoM on Wheels</title>

</head>

<body>

<?php
include "nav.php";
?>

<header>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item item active">
      <img style="height:500px; width:100%;" src="images/ab.png" alt="picture 1">
    </div>

    <div class="carousel-item item">
      <img src="images/DOSAAA.webp" style="height:500px; width:100%;" alt="picture 2">
    </div>

    <div class="carousel-item item">
      <img src="images/kitkatCAKE.jpg" alt="picture 3" style="height:500px; width:100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>



<!--Search Button-->
<br>

<div class ="col-md-4"></div>
<div class="col-md-4">
  <?php
include "search.php";
?>
</div>




<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <br>
    <h3>Search for your favourite food here</h3>

    <p> We provide delivery service 24/7 365 days. Our customer base are people who work late but crave for food.</p>


  </div>
</section>

<?php
include "footer.php";
?>

</body>

</html>
<!-- assets -->    

<!-- <script src="assets/js/bootstrap.bundle.js"></script> -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/js/bootstrap.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<!-- <script src="assets/js/contact_us.js"></script> -->
<!-- <script src="assets/js/dropdown.js"></script> -->
<!-- <script src="assets/js/jquery.js"></script> -->
<script src="assets/js/jquery.min.js"></script>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">

<link href="assets/css/half-slider.css" rel="stylesheet">
<link href="assets/css/index.css" rel="stylesheet">

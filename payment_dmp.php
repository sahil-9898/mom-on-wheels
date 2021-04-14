<!doctype html>
<html>

<head>
  <meta charset="utf-8">

  <title>MoM on Wheels</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,400italic,700italic|Open+Sans">
  <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/check-radio.css">
  <link href="assets/css/half-slider.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="assets/css/index.css" rel="stylesheet">




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



  <!-- Custom styles for this profile page -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>

  <?php
  include "nav.php";
  ?>


  <form class="Form" action="success.php">

    <h1><strong>Billing Information</strong></h1>
    <p>
      <strong>Shipping Address</strong>
      <br>

      <br><input type="text" name="zip" placeholder="Zip code">
      <br>

      <br><input type="text" name="rd" placeholder="Road no.">
      <br>
      <br><input type="text" name="area" placeholder="Area">
      <br>
      <br><input type="text" name="area" placeholder="Area">
      <br>
      <br><input type="text" name="flat" placeholder="flat">

      </textarea>
    </p>


    <div class="col-md-9"></div>

    <div class="form-group col-mid-9">
      <button type="submit" class="btn btn-xl btn-danger"> Place Order</button>
    </div>
  </form>


  <?php
  include "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bund le.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="assets/js/payment.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="assets/css/index.css" rel="stylesheet">
  <title>MoM on Wheels</title>

</head>

<body>
  <?php
  include "nav.php";
  include "header.php";
  ?>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>Contact Us</h1>

      <!-- Contact us form-->
      <div class="container">
        <div class="col-md-5" id="contact_form">
          <div class="form-area">
            <form role="form">
              <br style="clear:both;">
              <h3 style="margin-bottom: 25px; text-align: center;"></h3>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                <!-- <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                     -->
              </div>

              <button type="button" id="submit" name="submit" class="btn btn-primary pull-right" action="index.php">Submit</button>
            </form>
          </div>
        </div>
      </div>
  </section>


  <!-- Contact us form ends Here-->
  <?php
  include "footer.php";
  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
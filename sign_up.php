<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/half-slider.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="assets/css/index.css" rel="stylesheet">
  <title>MoM on Wheels</title>

</head>

<body>

  <?php
  include "nav.php";
  ?>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>Sign Up</h1>

      <!-- Sign up form-->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="regProcess.php" method="post" id="signup" role="form" enctype="multipart/form-data">
              <fieldset>
                <legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>

                <div class="form-group">
                  <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                  <input required type="text" name="phone" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="not used for marketing" />
                </div>

                <div class="form-group">
                  <label for="firstname"><span class="req">* </span> First name: </label>
                  <input class="form-control" type="text" name="fname" id="txt" onkeyup="Validate(this)" required />
                  <div id="errFirst"></div>
                </div>

                <div class="form-group">
                  <label for="lastname"><span class="req">* </span> Last name: </label>
                  <input class="form-control" type="text" name="lname" id="txt" onkeyup="Validate(this)" placeholder="hyphen or single quote OK" required />
                  <div id="errLast"></div>
                </div>

                <div class="form-group">
                  <label for="address"><span class="req">* </span> Address: </label>
                  <input class="form-control" required type="text" name="address" id="address" onchange="" />
                  <div class="status" id="status"></div>
                </div>

                <div class="form-group">
                  <label for="email"><span class="req">* </span> Email Address: </label>
                  <input class="form-control" required type="text" name="email" id="email" onchange="email_validate(this.value);" />
                  <div class="status" id="status"></div>
                </div>

                <div class="form-group">
                  <label for="username"><span class="req">* </span> Username: <small>This will be your login user name</small> </label>
                  <input class="form-control" type="text" name="username" id="txt" onkeyup="Validate(this)" placeholder="minimum 3 characters" required />
                  <div id="errLast"></div>
                </div>

                <div class="form-group">
                  <label for="password"><span class="req">* </span> Password: </label>
                  <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" id="pass1" /> </p>
                </div>

                <div class="form-group">
                  <label for="image"><span class="req">* </span> Picture: </label>
                  <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*" />
                </div>

                <div class="form-group">
                  <input class="btn btn-success" type="submit" name="submit_reg" value="Register">
                </div>

              </fieldset>
            </form><!-- ends register form -->

            <script type="text/javascript">
              document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
            </script>
          </div><!-- ends col-6 -->


        </div>

        <br>
        <br>

        <!-- Contact us form ends Here-->




        <!-- Footer -->
        <footer class="py-5 bg-dark">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; MoM on Wheels:2021</p>
          </div>
          <!-- /.container -->
        </footer>
        <script src="assets/js/sign_up.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bund le.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
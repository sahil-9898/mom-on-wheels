<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>MoM on Wheels</title>

  <!-- Custom styles for this profile page -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="assets/css/index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>

  <?php
  include "nav.php";
  include_once 'connect.php';
  $sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $image = $row['image'];
  ?>
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <?php
      echo '<img src="data:images/jpeg;base64,' . base64_encode($image) . '" height="180" width="180" />';
      ?>
      <!--profile code-->
      <div class="container">
        <div class="fb-profile">

          <div class="fb-profile-text">


            <h1><?php echo "$row[fname]"; ?>'s Profile</h1>

            <table style="border: none; font-family:Arial;font-weight: bold">
              <tr>
                <td> Name:</td>
                <td> <?php echo "$row[fname] $row[lname]"; ?></td>
              </tr>
              <tr>
                <td> Email:</td>
                <td><?php echo "$row[email]"; ?></td>
              </tr>
              <tr>
                <td> Phone:</td>
                <td><?php echo "$row[phone]"; ?></td>
              </tr>
              <tr>
                <td> Address:</td>
                <td><?php echo "$row[address]"; ?></td>
              </tr>
            </table>
          </div>
        </div>

      </div> <!-- /container -->
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <form class="form-inline" role="form" class="pagination-right" action="profileEdit.php">
          <div class="form-group" align="right">
            <button type="submit" class="btn btn-xl btn-danger"> Edit</button>
            <!-- <button type="submit" class="btn btn-xl btn-danger"> Edit</button> -->

        </form>
      </div>
    </div>
  </section>


  <div style="margin-top:90px;">
    <?php
    include "footer.php";
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bund le.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
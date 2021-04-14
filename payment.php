<?php
include_once 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MoM on Wheels</title>
    <link href="assets/css/profile.css" rel="stylesheet">
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="assets/css/index.css" rel="stylesheet">

</head>

<body>
    <?php
    include "nav.php";

    if (isset($_SESSION['valid']) != true) {
        echo "Please login or sign up first.";
    } else {
    ?>
        <!-- CheckOut-->
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h5><span class=""></span>Please select a payment method:</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">


                            <div class="row">
                                <div class="col-xs-2">

                                </div>
                                <div class="col-xs-4">
                                    <input type="radio" name="payment" value="GPAY">GPAY <br>
                                    <img src="images/GPAY.png" alt="">
                                    <br><br><br>
                                    <input type="radio" name="payment" value="Cash_on_delivery" checked> Cash on delivery<br>
                                    <img src="images/COD.png" alt="">
                                </div>

                            </div>
                            <hr>


                        </div>
                        <form method="post" action="payment_dmp.php">
                            <div class="panel-footer">
                                <div class="row text-center">
                                    <div class="col-xs-3">
                                        <button name="checkout" type="submit" class="btn btn-success btn-block">
                                            Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

    <script src="assets/js/sign_up.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bund le.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['checkout']) != 0) {

    $sql = "UPDATE cart SET delivery = '1' WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);

    echo '<script language="javascript">';
    //echo 'alert("Thank you for your order!")';
    echo '</script>';
    header('Refresh: 1; URL = success.php');
}
?>
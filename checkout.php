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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="assets/css/half-slider.css" rel="stylesheet">
	<link href="assets/css/index.css" rel="stylesheet">
	<link href="assets/css/profile.css" rel="stylesheet">

	<title>MoM on Wheels</title>

</head>

<body>
	<?php
	include "nav.php";

	if (isset($_SESSION['valid']) != true) {
		echo "Please login or sign up first.";
	} else {

		$sql = "SELECT * FROM cart WHERE username = '$_SESSION[username]'";
		$result = mysqli_query($conn, $sql);
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
										<h5><span class="glyphicon glyphicon-shopping-cart"></span> Food Cart</h5>
									</div>
									<div class="col-xs-6">
										<button type="button" class="btn btn-primary btn-sm btn-block" onclick="window.location.href = 'index.php'">
											<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-body">

							<?php
							$total = 0;
							while ($row = mysqli_fetch_array($result)) {
							?>
								<div class="row">
									<div class="col-xs-2">
										<?php
										$a = mysqli_query($conn, "SELECT * FROM menu WHERE item = '$row[item]'");
										$b = mysqli_fetch_assoc($a);
										$image = $b['image'];
										echo '<img src="data:images/jpeg;base64,' . base64_encode($image) . '" height="120" width="120" />';
										?>
									</div>
									<div class="col-xs-4">
										<h4 class="product-name"><strong><?php echo "$row[item]"; ?></strong></h4>
									</div>
									<div class="col-xs-6">
										<div class="col-xs-6 text-right">
											<h6>Rs <strong><?php echo "$row[price]"; ?> <span class="text-muted">&nbsp; x &nbsp;</span><?php echo "$row[quantity]"; ?></strong></h6>
										</div>
									</div>
								</div>
								<hr>
							<?php
								$total = $total + ($row['price'] * $row['quantity']);
							}
							?>

						</div>
						<div class="panel-footer">
							<div class="row text-center">
								<div class="col-xs-9">
									<h4 class="text-right">Total: <strong><?php echo "$total"; ?>.00</strong> Rs </h4>
								</div>
								<div class="col-xs-3">
									<button type="button" class="btn btn-success btn-block" onclick="window.location.href = 'payment.php'">
										Checkout
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
	}
	?>


	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bund le.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="assets/js/sign_up.js"></script>
</body>

</html>
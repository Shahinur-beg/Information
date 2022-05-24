<?php
session_start();
if (isset($_POST['submit'])) {
    include("connect.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['phone'];
	$address = $_POST['address'];

	$query = "Insert into Details(name,email,number,address) value('$name','$email','$number', '$address');";
	$result = mysqli_query($sqli, $query);
	if (mysqli_affected_rows($sqli) > 0) {
		echo "<script> alert('Done') </script>";
	}
}


?>

<!DOCTYPE html>

<head>
	<title>
		Playon24.com
	</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css" />
<link rel="stylesheet" href="mystyle.css" />

<body class="bg-primary">
	<!-- Navbar design HTML code  -->
	<div class="bg-light border-bottom-1 p-2">
		<div class="row">
			<div class="col-md-6 pl-5">
				<h3>Playon 24</h3>
			</div>
			<div class="col-md-6 pr-5 text-right">
				<a href="alldata.php" class="btn btn-primary">Fetch all data</a>
			</div>
		</div>
	</div>

	<!-- Body1 design HTML code    -->
	<div class="row mt-5">
		<div class="col-md-4 col-sm-10 bg-white mx-auto">
			<h3 class="p-3 text-center">Enter Your Details</h3>
			<form action="" method="POST" name="myform" onsubmit="return validateform()">
				<div class="form-group">
					<input id="username" class="form-control border-primary" type="text" name="name" placeholder="Full Name">
					<small class="text-muted">*First letter must be capital</small>
				</div>
				<div class=" form-group">
					<input id="email" class="form-control border-primary" type="text" name="email" placeholder="Email Address">
					<small class="text-muted">*must contain @ and .com</small>
				</div>
				<div class="form-group">
					<input id="number" class="form-control border-primary" type="text" name="phone" placeholder="Phone Number">
					<small class="text-muted">*Must start with +880</small>
				</div>
				<div class="form-group">
					<input id="address" class="form-control border-primary" type="address" name="address" placeholder="Home Address">
				</div>
				<div class="form-group text-center">
					<input id="done" class="btn btn-primary" type="submit" name="submit" value="submit">
				</div>
			</form>
		</div>
	</div>
	<!-- End of body1    -->

	<!-- FOOTER  -->

	<!-- End of footer -->
</body>

<script type="text/javascript" src="mystyle.js" ></script>

<html>
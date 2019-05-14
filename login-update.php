<?php

//require is you requiring it include it only include it
require "db.php";
include "functions.php";

if(isset($_POST['submit'])){
	updateTable();
}

?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container col-lg-6 mx-auto border border-success rounded-lg">
	<h1>Update</h1>
	<div>
		<form method="POST" action="login-update.php">	
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" placeholder="Enter Username!">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password">
			</div>
			<select name="id" id="">
				<?php
					showData();
				?>
			</select><br><br>
			<input class="btn btn-primary" type="submit" name="submit" value="Update">
		</form>
	</div>
</div>
</body>
</html>
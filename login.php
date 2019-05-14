<?php

	if(isset($_POST['submit'])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$connection = mysqli_connect("localhost", "root", "", "testphp");
		if($connection){
			echo "We are Connected";
		}
		else{
			die("DB connection failed");
		}

		//create

		$query = "INSERT INTO users (username, password) VALUES ('$username', '$password') ";
		$result = mysqli_query($connection, $query);

		if (!$result) {
			die('Query failed' . mysqli_error());
		}
		


	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container col-lg-6 mx-auto border border-success rounded-lg">
	<h1>Create</h1>
	<div>
		<form method="POST" action="login.php">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control" placeholder="Enter Username!">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="create">
		</form>
	</div>
</div>
</body>
</html>


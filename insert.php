<?php 

include 'config.php';

if(isset($_POST['done'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$q = " INSERT INTO `firsttTable`(`username`, `password`) VALUES ('$username', '$password') ";
	
	$query = mysqli_query($con, $q);
}

	
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="col-lg-6 m-auto">
		<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
			<div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Insert Operation</h1>
				</div>
				
				<label> Username: </label>
				<input type="text" name="username" class="form-control"></input><br>
				
				<label> Password: </label>
				<input type="password" name="password" class="form-control"></input><br>
				
				<button class="btn btn-success" type="submit" name="done">Submit</button>
			</div>
		</form>
	</div>

</body>
</html>


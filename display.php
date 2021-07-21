<html lang="en">
<head>
  <title>CRUD APP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-lg-12">
		<h1 class="text-center">Display Table Data</h1>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>Id</th>
				<th>Username</th>
				<th>Password</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			
	<?php 

		include 'config.php';
		$q = "select * from firsttTable";
		$query = mysqli_query($con, $q);
		$i = 0;
		while($res = mysqli_fetch_array($query)){
		$i++;
	?>
			
			<tr class="text-center">
				<td> <?php echo $i; ?> </td>
				<td> <?php echo $res['username']; ?> </td>
				<td> <?php echo $res['password']; ?> </td>
				<td> <button class="btn-danger btn text-center"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"/> Delete </button> </td>
				<td> <button class="btn-warning btn text-center"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"/> Update </button> </td>
			</tr>
			<?php 
			
				}
			?>
		</table>
	</div>
</div>

</body>
</html>


<?php 
	
$con = mysqli_connect('localhost', 'user', 'password');
mysqli_select_db($con, 'office');
if($con){
	//echo "Connected";
} else {
	echo "Not Connected";
}

?>

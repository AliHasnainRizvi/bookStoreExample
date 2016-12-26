<?php 
 if (isset($_GET['username']) && isset($_GET['password'])) {
	# code...
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'quickwork');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	$username = $_GET['username'];
	$password = $_GET['password'];
	$query = "SELECT * from users where name = '$username' and password = '$password'";
	$result = mysqli_query($db,$query);
	if (mysqli_num_rows($result) > 0) {
		# code...
		echo true;
	} else {
		echo false;
	}
}




?>
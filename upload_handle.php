<?php 

if (isset($_GET['id']) && isset($_GET['stock'])) {
	# code...
	$id = $_GET['id'];
	$stock = $_GET['stock'];
	define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'quickwork');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$query = "UPDATE products set prod_stock=prod_stock + '$stock' where prod_id = '$id'";

if ($result = mysqli_query($db,$query)) {
	# code...
	echo "Stock Added";
}
}



?>
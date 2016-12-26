<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'quickwork');

if (isset($_GET['id']) && isset($_GET['check'])) {
	
	# code...
	switch ($_GET['id']) {
		case 1:
			# code...
			op(1);
			break;
		case 2:
			# code...
			op(2);
			break;
		case 3:
			# code...
			op(3);
			break;
		case 4:
			# code...
			op(4);
			break;
		case 5:
			# code...
			op(5);
			break;
		default:
			# code...
			break;
	}



} elseif (isset($_GET['id']) && isset($_GET['order']) && !empty($_GET['order'])) {

	switch ($_GET['id']) {
		case 1:
			# code...
			order(1);
			break;
		case 2:
			# code...
			order(2);
			break;
		case 3:
			# code...
			order(3);
			break;
		case 4:
			# code...
			order(4);
			break;
		case 5:
			# code...
			order(5);
			break;
		default:
			# code...
			break;
	}



}

function op($id)
{
	# code...
	
$query = "SELECT prod_id,prod_price,prod_desp,prod_img_path,prod_detail, prod_stock FROM products where prod_id=".$id;
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$result = mysqli_query($db,$query);

if (mysqli_num_rows($result) > 0) {
	# code...
	$op = '';
	
		# code...
	$op = json_encode(mysqli_fetch_assoc($result));
	
	echo $op;
}

}

function order($id) {
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	$query = "UPDATE products set prod_stock = prod_stock-1 where prod_id= ".$id;
	if ($result = mysqli_query($db, $query)) {
		# code...
		$a = true;
	}
	$username = $_COOKIE['username'];
	$query = "Insert into orders (ord_username,ord_prod_id) values ('$username','$id')";	
	if ($result = mysqli_query($db,$query)) {
		# code...
		$b = true;
		$c = $a&&$b;
		echo $c;
	}

}
?>
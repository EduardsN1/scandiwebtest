<?php
include '../config.php';
$con = mysqli_connect($servername,$username,$password,$database);
$SKU = $_POST['SKU'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$atribute = $_POST['atribute'];
$sql = "INSERT INTO `testss`(`sku`, `name`, `price`,`type`, `atribute`) VALUES ('$SKU', '$name', '$price', '$type', '$atribute')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>

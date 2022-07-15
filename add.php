<?php 
include("config.php");

$sku = $_POST['in_Sku'];
$name = $_POST['in_Name'];
$price = $_POST['in_Price'];
$attribute = $_POST['in_Attribute'];

$sql = "INSERT INTO product (sku,name,price,attribute) VALUES (:sku,:name,:price,:attribute)";
$query = $dbConn->prepare($sql);
$query->bindparam(':sku', $sku);
$query->bindparam(':name', $name);
$query->bindparam(':price', $price);
$query->bindparam(':attribute', $attribute);
$query->execute();
$dbConn = null;
header("Location:../../index.php");

?>
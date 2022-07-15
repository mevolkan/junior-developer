<?php
include("config.php");

$sku = $_POST['in_Sku'];
$name = $_POST['in_Name'];
$price = $_POST['in_Price'];
$attribute = $_POST['in_Attribute'];

$sql = "UPDATE product SET sku=:sku,name=:name,price=:price,attribute=:attribute WHERE sku=:sku";
$query = $dbConn->prepare($sql);
$query->bindparam(':sku', $sku);
$query->bindparam(':name', $name);
$query->bindparam(':price', $price);
$query->bindparam(':attribute', $attribute);
$query->execute();
$dbConn = null;
header("Location:../../index.php");

?>
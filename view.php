<?php 

include_once("config.php");
$result = $dbConn->query("SELECT * FROM product ORDER BY id DESC");
while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
    echo "<YourHTML>";
    echo "<YourHTML>".$row['sku']."</YourHTML>";
    echo "<YourHTML>".$row['name']."</YourHTML>";
    echo "<YourHTML>".$row['price']."</YourHTML>";
    echo "<YourHTML>".$row['attribute']."</YourHTML>";
    echo "<YourHTML>";
}
$dbConn = null;

?>
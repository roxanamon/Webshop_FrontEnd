<meta charset="UTF-8">
<?php
require ("connect.php");
$query = "SELECT * FROM produkter";
$result = mysqli_query($connection , $query);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
     array_push($arr , $row);
}
header('Content-type: application/json'); 
echo json_encode($arr);
?>
<?php
$server = "localhost";
$username ="root";
$pass="";
$dbname ="student_info";
$conn = new mysqli($server, $username ,$pass , $dbname);
if($conn) {
    echo "connected";
} else {
    echo "not connected";
}

$fetchsql = "SELECT * FROM `student`";
$result = $conn->query($fetchsql);
$data = $result->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
print_r($data);
echo "</pre>";


?>
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

?>
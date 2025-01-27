<?php

include "connection.php";
if(!empty($_GET['id'])){
    $id= $_GET['id'];
    $deletesql = "DELETE FROM `student` WHERE id = '$id'";
    if ($conn->query($deletesql))
    {
        header("Location:home.php");
    }
}
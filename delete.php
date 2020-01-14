<?php
include("conf.php"); 

$id = $_GET['id']; 
 
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id"); 
 
header("Location:index.php");
?>
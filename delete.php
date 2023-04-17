<?php

include 'conn.php';
$name = $_GET['Name'];
$q = "DELETE FROM `pdnew` WHERE Name = '$name' ";
mysqli_query($con,$q);
header('location:dispnew.php');

?>
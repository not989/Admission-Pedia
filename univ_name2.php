<?php

$connection = mysqli_connect("localhost","root","","working");

$name = $_POST ["university"];

$query1= "SELECT univ_id FROM universities where univ_name = '$name'";
$result = mysqli_query($connection,$query1) or die("Failed to query database" .mysqli_error($connection));

$row =mysqli_fetch_array($result);
$val=$row['univ_id'];

//Sending university id to "unit_name.php"
header("Refresh:0; url=unit_name.php?univ=$val");

?>

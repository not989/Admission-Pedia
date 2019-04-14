<?php

$connection = mysqli_connect("localhost","root","","working");

$univ_id= $_POST ["univ1"];   //university id
$name = $_POST ["unit"];      //corresponding unit name


//as unit name is not uniqe,so unit id is used here.
$query= "SELECT unit_id FROM units where unit_name = '$name' and univ_id = '$univ_id'";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error($connection));
$row =mysqli_fetch_array($result);
$val=$row['unit_id'];

header("Refresh:0; url=modification_page.php?unit=$val&univ=$univ_id");
?>

<?php

$connection = mysqli_connect("localhost","root","","working");

$val1 = $_POST['req_ssc_gpa'];
$val2 = $_POST['req_hsc_gpa'];
$val3 = $_POST['apply_off'];
$val4 = $_POST['price'];
$val5 = $_POST['exam_date'];

$univ1 = $_POST['univ'];
$unit1 = $_POST['unit'];




//SSC GPA UPDATE QUERY
$query1 = "UPDATE universities SET req_ssc_gpa='$val1' WHERE univ_id = '$univ1' ";
$result1 = mysqli_query($connection,$query1) or die("Failed to query database" .mysqli_error($connection));

//HSC GPA UPDATE QUERY
$query2 = "UPDATE universities SET req_hsc_gpa='$val2' WHERE univ_id = '$univ1' ";
$result2 = mysqli_query($connection,$query2) or die("Failed to query database" .mysqli_error($connection));

//LAST APPLY DATE UPDATE QUERY
$query3 = "UPDATE universities SET apply_off='$val3' WHERE univ_id = '$univ1' ";
$result3 = mysqli_query($connection,$query3) or die("Failed to query database" .mysqli_error($connection));

//FORM PRICE UPDATE QUERY
$query4 = "UPDATE units SET price='$val4' WHERE unit_id = '$unit1' ";
$result4 = mysqli_query($connection,$query4) or die("Failed to query database" .mysqli_error($connection));

//EXAM DATE UPDATE QUERY
$query5 = "UPDATE units SET exam_date='$val5' WHERE unit_id = '$unit1' ";
$result5 = mysqli_query($connection,$query5) or die("Failed to query database" .mysqli_error($connection));




header("Refresh:0; url=adminoptions.php");
?>

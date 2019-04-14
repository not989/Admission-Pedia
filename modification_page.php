<?php

$connection = mysqli_connect("localhost","root","","working");

 ?>


<!doctype html>

<html>

<title>Databse</title>

<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bs/js/bootstrap.js"></script>
<script type="text/javascript" src="bs/js/npm.js"></script>

</head>

<body>



	<header>

		<nav class="navbar navbar-default">

			<h1 class="text-center">Admission pedia</h1>

			<div class="navbar-wrapper">
				<div class="container">
				</div>
			</div>


		</nav>

		<?php $unit1= $_GET['unit'];?>
        <?php $univ1= $_GET['univ'];?>

		<div class="container">
			<form action="modification_page2.php" class="form-signin" method="post">

                <!-- hidden section which send university id to "modification_page2.php" -->
        		<input type="hidden" name="univ" value="<?php echo $univ1;?>" >

                <!-- hidden section which send unit id to "modification_page2.php" -->
        		<input type="hidden" name="unit" value="<?php echo $unit1;?>" >


            <!-- SSC GPA fill up option -->
            <div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >SSC GPA with optional</label>
                        <?php
                            $sql = mysqli_query($connection, "SELECT req_ssc_gpa FROM universities where univ_id='$univ1'");
                            $row =mysqli_fetch_array($sql);
                            $val1 = $row['req_ssc_gpa'];
                        ?>
       				 <input type="text" name="req_ssc_gpa" id="req_ssc_gpa" class="form-control" value="<?php echo $val1;?>" >
        	</div>

            <!-- HSC GPA fill up option -->
            <div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >HSC GPA with optional</label>
                        <?php
                            $sql = mysqli_query($connection, "SELECT req_hsc_gpa FROM universities where univ_id='$univ1'");
                            $row =mysqli_fetch_array($sql);
                            $val2 = $row['req_hsc_gpa'];
                        ?>
       				 <input type="text" name="req_hsc_gpa" id="req_hsc_gpa" class="form-control" value="<?php echo $val2;?>" >
        	</div>


            <!-- Last date of application fill up option -->
            <div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >Last apply date</label>
                        <?php
                            $sql = mysqli_query($connection, "SELECT apply_off FROM universities where univ_id='$univ1'");
                            $row =mysqli_fetch_array($sql);
                            $val3 = $row['apply_off'];
                        ?>
       				 <input type="text" name="apply_off" id="apply_off" class="form-control" value="<?php echo $val3;?>" >
        	</div>





            <!-- Form price fill up option -->
            <div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >Form price(tk)</label>
                        <?php
                            $sql = mysqli_query($connection, "SELECT price FROM units where unit_id='$unit1'");
                            $row =mysqli_fetch_array($sql);
                            $val4 = $row['price'];
                        ?>
       				 <input type="text" name="price" id="price" class="form-control" value="<?php echo $val4;?>" >
        	</div>



            <!-- Exam date fill up option -->
            <div class="col-xs-8 col-xs-offset-2">
        				<label for="email" >Exam date</label>
                        <?php
                            $sql = mysqli_query($connection, "SELECT exam_date FROM units where unit_id='$unit1'");
                            $row =mysqli_fetch_array($sql);
                            $val5 = $row['exam_date'];
                        ?>
       				 <input type="text" name="exam_date" id="exam_date" class="form-control" value="<?php echo $val5;?>" >
        	</div>


			<br><br><br><br><br><br><br><br><br><br>

            <div class="col-xs-4 col-xs-offset-4">
				<input class="btn btn-lg btn-login btn-block pull-bottom" id='gg' type="submit" value="Modify">
			</div>
			</form>
		</div>
	    </header>
	</body>
</html>

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

		<div class="container">
			<form action="univ_name2.php" class="form-signin" method="post">
			<div class="col-xs-8 col-xs-offset-2">
    				<label for="inputname" >University</label>
                    <select class="form-control" id="university" name="university">
    					<?php
    						$sql = mysqli_query($connection, "SELECT univ_name,univ_id FROM universities");
    						while ($row = $sql->fetch_assoc()){
    							echo "<option>" . $row['univ_name'] . "</option>";
    						}
    					?>
    				</select>
    		</div>




    		<!-- <div class="col-xs-8 col-xs-offset-2">
				<label for="unit" >Unit</label>
			<select class="form-control" name="unit" id="unit" name="unit">
                <?php
                     $sql = mysqli_query($connection, "SELECT unit_name FROM units where univ_id=30");
                     while ($row = $sql->fetch_assoc()){
                        echo "<option>" . $row['unit_name'] . "</option>";
                    }
                ?>
			</select>
		    </div> -->





			<br><br><br><br><br>
			<div class="col-xs-4 col-xs-offset-4">
				<input class="btn btn-lg btn-login btn-block pull-bottom" id='gg' type="submit" value="GO">
			</div>
			</form>
		</div>
	    </header>
	</body>
</html>

<!doctype html>

<html>
	<head>
		<title>Database</title>
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
				<div class="container"></div>
		</nav>

			<div class="container">

				 <form action="loginadmin2.php" class="form-signin" method="post">
        			<h2 class="form-signin-heading">Sign in</h2>
        			<div class="col-xs-8">
        				<label for="inputEmail" >Username</label>
       				 	<input type="username" name="username" id="inputEmail" class="form-control" placeholder="Username"required autofocus>
        			</div>
        			<div class="col-xs-8">
        			<label for="inputPassword" >Password</label>
        			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        			<div>
        			<div class="checkbox">
          				<label>
            			<input type="checkbox" value="remember-me"> Remember me
          				</label>
        			</div>
        			<div>
        				<button type="submit" name="submit" class="btn btn-default btn-lg">SignIn</button>
        			</div>
      			</form>
			</div>
	    </header>
	</body>
</html>

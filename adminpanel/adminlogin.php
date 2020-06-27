<!DOCTYPE html>
<html>
<head>

<!--Bootstra link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="adminstyle.css">


	<title></title>
</head>
<body>
<div class="bg-image"></div>
	<div class="container-fluid">
		<section class="row justify-content-center">
		  <section class="col-12 md-col-6 col-sm-3">
			<form method="POST" action="authsignin.php" class="form-container">
				<h4>Admin Log In</h4>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" /required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" /required>
				  </div>				  
				  <button type="submit" name="submit" class="btn btn-outline-primary btn-block">LogIn</button>
				</form>
			</section>
		</section>
		</div>
	</div>



</body>
</html>
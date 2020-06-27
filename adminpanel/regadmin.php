<?php 

$con = mysqli_connect('localhost', 'root', '', 'trekhippy' );


if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'] ;


	$query = ("INSERT INTO adminauth(email, password) VALUES ('$email', '$password')" );


	 if(!mysqli_query($con, $query)) {
				  echo '<h2>Could not Sign Up</h2>' ;
			  } else {
				  echo '<h2 id="signup-success">Data inserted successfully</h2>' ;
			  }
		} 
?>
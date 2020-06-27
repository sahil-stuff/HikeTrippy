<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'trekhippy' );

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'] ;


	$query = ("SELECT * FROM adminauth WHERE email = '$email' AND password = '$password' " );


	  if ($mysqli_result = mysqli_query($con, $query)) {
 	        if(mysqli_num_rows($mysqli_result)==NULL) {
 				echo '<h2 style="text-align: center; margin-top: 20%;">No user found, try again!</h2>' ;
 				header("refresh:2; url=adminlogin.php") ;
 			} else {
      $row = mysqli_fetch_assoc($mysqli_result);
 			$_SESSION['unique_id'] = $row['id'];
 			 echo "<h2>Signing In Wait...  $email" ;
 		     header("refresh:2; url=admin_profile.php") ;
 	        }
      // print_r($row);


 	    }
}




?>
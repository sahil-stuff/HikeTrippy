<?php

include 'links.php' ;
include 'navbar.php' ;


  $con = mysqli_connect('localhost', 'root', '', 'trekhippy') ;


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if(isset($_POST['submit'])) {
  	$dates = $_POST['dates'];
  	$price = $_POST['price'];
  	$region = $_POST['region'];
  	$difficulty = $_POST['difficulty'];
  	$length = $_POST['length'];
  	$altitude = $_POST['altitude'];
  	$duration = $_POST['duration'];
  	$distance = $_POST['distance'];
  	$description = $_POST['description'];
  	$image_name = $_FILES['fileToUpload']["name"];

  	// $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
   //  if($check !== false) {
   //      echo "File is an image - " . $check["mime"] . ".";
   //      $uploadOk = 1;
   //  } else {
   //      echo "File is not an image.";
   //      $uploadOk = 0;
   //  }

    //$filename = $_POST['filename'];

  }


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



  $query = ("INSERT INTO pictures(dates, price, region, difficulty, length, altitude, duration, distance, description,image_name) VALUES('".$dates."', '".$price."', '".$region."', '".$difficulty."', '".$length."', '".$altitude."', '".$duration."', '".$distance."', '".$description."','".$image_name."') ") ;

 

  if (mysqli_query($con, $query)) {
    
     print '<h2>File uploaded Successfully!</h2>';
    }
     else {

     	 print 'could not upload file';
     	
     }

?>


<style>
	
h2 {
	text-align: center;
	margin-top: 10px;

}

</style>
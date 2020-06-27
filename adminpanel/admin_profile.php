<?php

include 'links.php' ;
include 'navbar.php' ;

// session_start();

//   $con = mysqli_connect('localhost', 'root', '', 'trekhippy') ;
//   // $unique_id = $_SESSION['unique_id'];
//   $query2 = ("SELECT * FROM users where id = $unique_id ") ;

//   if ($mysqli_result = mysqli_query($con, $query2)) {
//       $row = mysqli_fetch_assoc($mysqli_result);

// }
?>


<head> <meta name="viewport" content="width=device-width, initial-scale=1" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" /> <meta name="description" content="Themeforest Template Polo"> <!-- Document title --> <title>POLO | The Multi-Purpose HTML5 Template</title> <!-- Stylesheets & Fonts --> <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="plugins.css" rel="stylesheet"> <link href="style.css" rel="stylesheet"> <link href="responsive.css" rel="stylesheet"> </head>


<style>
  .upload-btn-wrapper {
  position: absolute;
  overflow: hidden;
  display: inline-block;
}

.btn {
  color: black;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 13px;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

</style>



<!--Default Form-->
        <div class="row">
          <div class="col-md-10 col-md-offset-1">   

            <form method="POST" action="picsupload.php" enctype="multipart/form-data">              
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="name">DATES</label>
                    <input type="text" class="form-control required" name="dates" placeholder="Enter dates" id="dates" aria-required="true">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="price">PRICE</label>
                    <input type="text" class="form-control required price" name="price" placeholder="Enter price" id="price" aria-required="true">
                  </div>
                </div>
              </div>
              <div class="row">    
                 <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="phone">REGION</label>
                    <input type="text" class="form-control required" name="region" placeholder="Enter region" id="region" aria-required="true">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="company">DIFFICULTY</label>
                    <input type="text" class="form-control required" name="difficulty" placeholder="Enter difficulty" id="difficulty" aria-required="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                <div class="fileUpload btn btn-outline-primary">
                    <span>Upload</span>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="upload" />
                </div>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="length">LENGTH</label>
                    <input type="text" class="form-control required" name="length" placeholder="Enter length" id="length" aria-required="true">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="company">ALTITUDE</label>
                    <input type="text" class="form-control required" name="altitude" placeholder="Enter altitude" id="altitude" aria-required="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="phone">DURATION</label>
                    <input type="text" class="form-control required" name="duration" placeholder="Enter duration" id="duration" aria-required="true">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="upper" for="company">Distance</label>
                    <input type="text" class="form-control required" name="distance" id="distance" placeholder="Enter distance" aria-required="true">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="upper" for="comment">Your comment</label>
                    <textarea class="form-control required" name="description" rows="9" placeholder="Enter comment" id="description" aria-required="true"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group text-center">
                    <button class="btn btn-default" name="submit" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
        <!--END: Default Form-->
        <hr class="space">


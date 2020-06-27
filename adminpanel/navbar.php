<?php
$con = mysqli_connect('localhost', 'root', '', 'trekhippy') ;
session_start() ;

include 'links.php' ;
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark";>
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">
<?php
$unique_id = $_SESSION['unique_id'];
$query2 = ("SELECT email FROM adminauth where id = $unique_id ");

if ($mysqli_result = mysqli_query($con, $query2)) {
    $row = mysqli_fetch_assoc($mysqli_result);
    echo $row['email'];
  }?></a>
</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="singout.php" style="letter-spacing: 20px; display: inline-block; color: white;"><i class="fa fa-sign-out fa-lg title="Sign Out" onMouseOver="this.style.color='brown'" onMouseOut="this.style.color='white'"></i></a></li>
</ul>
</div>
</nav>

<?php
$dbhost = "localhost";
$dbname = "cms_db";
$connection = mysqli_connect($dbhost, $dbname);
if ( mysqli_connect_errno() ) {
  die("Database connection faild" . mysqli_connect_errno() . "(" . mysqli_connect_errno() . ")" );

}


?>

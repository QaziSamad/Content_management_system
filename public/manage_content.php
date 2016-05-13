<?php  require_once("../includes/layout/db_connection.php"); ?>
<?php  require_once("../includes/functions.php"); ?>

<?php
 $query = " SELECT * FROM subjects WHERE VISIBLE = 1 ";

 $result = mysqli_query($connection, $query);
 if (!$result)
 {
	 die("database query faild.");
 }
 ?>

<?php include("../includes/layout/header.php"); ?>
  <div id="main">
  	<div id="navigation">
			<?php
	    while ($subject= mysqli_fetch_assoc($result)) {
	    ?>
	    <li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?> </li>
	     <?php
	      }
	      ?>
 </div>
  	<div id="page">
  		<h2>Manage content </h2>
    </div>
  </div>
<?php	mysqli_free_result($result); ?>

<?php include("../includes/layout/footer.php"); ?>

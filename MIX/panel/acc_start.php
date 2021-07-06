 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="task1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
header("Location: MIX_Panel.html");
?>

 
 <?php 

if (isset($_POST['off'])) {

$sql = " UPDATE `robot_arm` SET `arm1`='0' , `arm2`='0', `arm3`='0', `arm4`='0', `arm5`='0', `arm6`='0', `start`='0' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['on'])) {

$sql = " UPDATE `robot_arm` SET `start`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>

  <?php 

if (isset($_POST['off'])) {

$sql = " UPDATE `robot_stand` SET `forward`='none',`backward`='none',`left`='none',`right`='none', `start`='0' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
 <?php 

if (isset($_POST['on'])) {

$sql = " UPDATE `robot_stand` SET  `start`='1' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>


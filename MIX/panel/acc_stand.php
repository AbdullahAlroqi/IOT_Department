
 
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

if (isset($_POST['RI'])) {

$sql = " UPDATE `robot_stand` SET `right`='RIGHT' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>

   <?php 

if (isset($_POST['LE'])) {

$sql = " UPDATE `robot_stand` SET  `left`='LEFT' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
    <?php 

if (isset($_POST['UP'])) {

$sql = " UPDATE `robot_stand` SET  `forward`='forward' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>
   <?php 

if (isset($_POST['DO'])) {

$sql = " UPDATE `robot_stand` SET  `backward`='backward' WHERE `ID`='1'";
$result = $conn->query($sql);
 }

 ?>



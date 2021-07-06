 


<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"task1");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
 
<?php  
$sql = "SELECT  * FROM robot_arm ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

       echo  $row["arm5"] ;
 
    }
  }
?>

 
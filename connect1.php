<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$pword = "";
$dbname = "school";
$email = $_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $pword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM register WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location:index.html");
} else {
  echo "Invalid";
}

$conn->close();
?>

</body>
</html>

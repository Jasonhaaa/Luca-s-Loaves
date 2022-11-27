<html>
<body> 
<?php
$servername = "localhost";
$username = "root";
$password = "gongyiyang123";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuest (firstname, lastname, englishname,email)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[englishname]','$_POST[email]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>
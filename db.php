<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Retrieve data
$sql = "SELECT name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "Name: " . $row["name"] . "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>
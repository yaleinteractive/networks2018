<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "calendar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, date, title FROM calendar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "{$row['id']}. {$row['date']}: {$row['title']}<br>";
    }
} else {
    echo "No events";
}
$conn->close();
?>

<?php
$servername = "34.94.86.164";
$username = "root";
$password = "UnitySongRoot1";
$dbname = "people_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT entryID, guestName, content FROM entries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["entryID"]. " - Name: " . $row["guestName"]. " " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
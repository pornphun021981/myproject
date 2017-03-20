<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT id, firstname, lastname FROM MyGuests ";
//$sql = "SELECT * FROM MyGuests Orders LIMIT 1";
$sql = "SELECT * FROM MyGuests Orders LIMIT 2, 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

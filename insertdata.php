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

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('pornphun', 'wongwat', 'kanha2198@gmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('sutiporn', 'sutamma', 'sutiporn@gmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('suti', 'jaipong', 'suti@gmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('chonticha', 'sooksannan', 'chonticha@gmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('chonticha', 'sooksannan', 'chonticha@gmail.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

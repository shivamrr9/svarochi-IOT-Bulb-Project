
 <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$con = new mysqli($servername, $username, $password,"piData");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 


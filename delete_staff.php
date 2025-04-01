<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the staff ID from the URL
$id = $_GET['id'];

// Query to delete the staff record
$sql = "DELETE FROM staff WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Staff deleted successfully!";
    header("Location: staff_list.php"); // Redirect to the staff list page
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>


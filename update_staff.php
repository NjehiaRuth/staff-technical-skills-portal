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

// Get data from the form
$id = $_POST['id'];
$indexNumber = $_POST['indexNumber'];
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$currentLocation = $_POST['currentLocation'];
$highestEducation = $_POST['highestEducation'];
$dutyStation = $_POST['dutyStation'];
$availabilityRemoteWork = isset($_POST['availabilityRemoteWork']) ? 1 : 0;

// Query to update the staff data
$sql = "UPDATE staff SET indexNumber='$indexNumber', fullName='$fullName', email='$email', currentLocation='$currentLocation', highestEducation='$highestEducation', dutyStation='$dutyStation', availabilityRemoteWork=$availabilityRemoteWork WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Staff updated successfully!";
    header("Location: staff_list.php"); // Redirect to the staff list page
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


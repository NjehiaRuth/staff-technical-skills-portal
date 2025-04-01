<?php
// Establish database connection
$servername = "localhost";
$username = "root";  // Default XAMPP MySQL username
$password = "";      // Default XAMPP MySQL password (blank)
$dbname = "staff_portal";  // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$indexNumber = $_POST['indexNumber'];
$fullNames = $_POST['fullNames'];
$email = $_POST['email'];
$currentLocation = $_POST['currentLocation'];
$highestEducation = $_POST['highestEducation'];
$dutyStation = $_POST['dutyStation'];
$availabilityForRemoteWork = isset($_POST['availabilityForRemoteWork']) ? 1 : 0;
$softwareExpertise = $_POST['softwareExpertise'];
$expertiseLevel = $_POST['expertiseLevel'];
$language = $_POST['language'];
$responsibilityLevel = $_POST['responsibilityLevel'];

// SQL query to insert the data into the staff table
$sql = "INSERT INTO staff (indexNumber, fullNames, email, currentLocation, highestEducation, dutyStation, availabilityForRemoteWork, softwareExpertise, expertiseLevel, language, responsibilityLevel) 
VALUES ('$indexNumber', '$fullNames', '$email', '$currentLocation', '$highestEducation', '$dutyStation', '$availabilityForRemoteWork', '$softwareExpertise', '$expertiseLevel', '$language', '$responsibilityLevel')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New staff record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

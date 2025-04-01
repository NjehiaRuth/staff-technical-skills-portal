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

// Query to get the staff data by ID
$sql = "SELECT * FROM staff WHERE id = $id";
$result = $conn->query($sql);

// Fetch the staff record
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>
<body>
    <h2>Edit Staff Details</h2>
    <form action="update_staff.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="indexNumber">Index Number:</label>
        <input type="text" id="indexNumber" name="indexNumber" value="<?php echo $row['indexNumber']; ?>" required><br><br>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

        <label for="currentLocation">Current Location:</label>
        <input type="text" id="currentLocation" name="currentLocation" value="<?php echo $row['currentLocation']; ?>" required><br><br>

        <label for="highestEducation">Highest Level of Education:</label>
        <select id="highestEducation" name="highestEducation" required>
            <option value="High School" <?php if($row['highestEducation'] == "High School") echo "selected"; ?>>High School</option>
            <option value="Undergraduate" <?php if($row['highestEducation'] == "Undergraduate") echo "selected"; ?>>Undergraduate</option>
            <option value="Masters" <?php if($row['highestEducation'] == "Masters") echo "selected"; ?>>Masters</option>
            <option value="PhD" <?php if($row['highestEducation'] == "PhD") echo "selected"; ?>>PhD</option>
        </select><br><br>

        <label for="dutyStation">Duty Station:</label>
        <select id="dutyStation" name="dutyStation" required>
            <option value="Headquarters" <?php if($row['dutyStation'] == "Headquarters") echo "selected"; ?>>Headquarters</option>
            <option value="Field Office" <?php if($row['dutyStation'] == "Field Office") echo "selected"; ?>>Field Office</option>
        </select><br><br>

        <label for="availabilityRemoteWork">Availability for Remote Work:</label>
        <input type="checkbox" id="availabilityRemoteWork" name="availabilityRemoteWork" <?php if($row['availabilityRemoteWork'] == 1) echo "checked"; ?>><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>

<?php
$conn->close();
?>

<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
$dbname = "staff_portal"; // Database name (use the correct name if different)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all staff records
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
</head>
<body>
    <h2>Staff List</h2>
    <table border="1">
        <tr>
            <th>Index Number</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Current Location</th>
            <th>Highest Education</th>
            <th>Duty Station</th>
            <th>Actions</th>
        </tr>

        <?php
        // Fetch and display the staff data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['indexNumber'] . "</td>
                        <td>" . $row['fullName'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['currentLocation'] . "</td>
                        <td>" . $row['highestEducation'] . "</td>
                        <td>" . $row['dutyStation'] . "</td>
                        <td>
                            <a href='edit_staff.php?id=" . $row['id'] . "'>Edit</a> | 
                            <a href='delete_staff.php?id=" . $row['id'] . "'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No staff records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

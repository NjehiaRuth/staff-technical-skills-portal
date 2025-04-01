<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form</title>
</head>
<body>
    <h2>Add Staff Details</h2>
    <form action="process_add_staff.php" method="POST">
        <label for="indexNumber">Index Number:</label>
        <input type="text" id="indexNumber" name="indexNumber" required><br><br>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="currentLocation">Current Location:</label>
        <input type="text" id="currentLocation" name="currentLocation" required><br><br>

        <label for="highestEducation">Highest Level of Education:</label>
        <select id="highestEducation" name="highestEducation" required>
            <option value="High School">High School</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Masters">Masters</option>
            <option value="PhD">PhD</option>
        </select><br><br>

        <label for="dutyStation">Duty Station:</label>
        <select id="dutyStation" name="dutyStation" required>
            <option value="Headquarters">Headquarters</option>
            <option value="Field Office">Field Office</option>
        </select><br><br>

        <label for="availabilityRemoteWork">Availability for Remote Work:</label>
        <input type="checkbox" id="availabilityRemoteWork" name="availabilityRemoteWork"><br><br>

        <label for="softwareExpertise">Software Expertise:</label>
        <select id="softwareExpertise" name="softwareExpertise" required>
            <option value="Microsoft Excel">Microsoft Excel</option>
            <option value="SPSS">SPSS</option>
            <option value="R">R</option>
            <option value="Python">Python</option>
        </select><br><br>

        <label for="softwareExpertiseLevel">Software Expertise Level:</label>
        <select id="softwareExpertiseLevel" name="softwareExpertiseLevel" required>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select><br><br>

        <label for="language">Language:</label>
        <select id="language" name="language" required>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Spanish">Spanish</option>
        </select><br><br>

        <label for="levelOfResponsibility">Level of Responsibility:</label>
        <select id="levelOfResponsibility" name="levelOfResponsibility" required>
            <option value="Junior">Junior</option>
            <option value="Mid-level">Mid-level</option>
            <option value="Senior">Senior</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

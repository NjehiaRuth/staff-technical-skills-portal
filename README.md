# Staff Portal - Staff Details Submission Form

## Overview

The Staff Portal is a web application designed to capture and store staff details in a MySQL database. This includes information such as index number, full name, email, current location, highest level of education, duty station, software expertise, language proficiency, and level of responsibility.

The form is built with HTML for the frontend and PHP for processing the form data and inserting it into a MySQL database.

## Features

- **User Input Form**: A form for adding staff details.
- **Database Integration**: The form data is processed and inserted into a MySQL database.
- **Validation**: Ensures that the required fields are filled before submission.

## Technologies Used

- **Frontend**: HTML
- **Backend**: PHP
- **Database**: MySQL (XAMPP Localhost)
- **Server**: Apache (XAMPP)
- **CSS**: Basic styling for form layout (if applicable)

## Setup Instructions

### Prerequisites

To run this project, you'll need the following installed:

1. **XAMPP** (for PHP and MySQL)
2. A web browser (e.g., Chrome, Firefox)

### Installation Steps

1. **Download XAMPP**: If you haven't already, download and install XAMPP from [here](https://www.apachefriends.org/index.html).
   
2. **Start Apache and MySQL**:
   - Open the XAMPP Control Panel and start both Apache and MySQL.

3. **Create the Database**:
   - Open your browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `staff_portal`.
   - Execute the following SQL command to create the `staff` table:
   
   ```sql
   CREATE TABLE staff (
       id INT(11) AUTO_INCREMENT PRIMARY KEY,
       index_number VARCHAR(50),
       full_names VARCHAR(255),
       email VARCHAR(100),
       current_location VARCHAR(100),
       highest_education VARCHAR(100),
       duty_station VARCHAR(100),
       remote_work TINYINT(1),
       software_expertise VARCHAR(100),
       expertise_level VARCHAR(50),
       language VARCHAR(100),
       responsibility_level VARCHAR(50)

4. **Copy the project files** (HTML form and PHP script) into the `htdocs` directory inside your XAMPP installation folder. The default path is usually `C:\xampp\htdocs\`.

5. **Access the Form**:
   - Open your browser and go to `http://localhost/your-project-folder/` to view the form.

6. **Submit Form Data**:
   - Fill out the form and submit it. The data will be stored in the `staff` table in your `staff_portal` database.

## File Structure

- `index.html`: Contains the form for entering staff details.
- `process_add_staff.php`: Processes form data and inserts it into the MySQL database.
- `config.php` (optional): If you choose to separate database connection details into a config file.

## How It Works

### Frontend (HTML):

The form in `index.html` contains fields to capture the staff's details, including:

- Index Number
- Full Name
- Email Address
- Current Location
- Highest Level of Education
- Duty Station
- Availability for Remote Work
- Software Expertise
- Software Expertise Level
- Language Proficiency
- Level of Responsibility

### Backend (PHP):

- Upon form submission, the data is sent to `process_add_staff.php` via a POST request.
- The PHP script processes the form data and inserts it into the `staff` table in the MySQL database.

### Database:

- Data is stored in the `staff` table, and each record is automatically assigned a unique `id` due to the `AUTO_INCREMENT` property.

## Troubleshooting

- **Form Submission Not Working**: Ensure that Apache and MySQL are running in the XAMPP Control Panel.
- **MySQL Connection Issues**: Double-check your database credentials in `process_add_staff.php`.


<?php
$servername = "localhost";
$username = "root";
$password = "Gowthamk@0906=18";
$dbname = "logindb";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

$createTableSQL = "CREATE TABLE IF NOT EXISTS  stuattend1 (
  name VARCHAR(255),
  attendance_date DATE,
  status VARCHAR(255)
)";

if ($conn->query($createTableSQL) === FALSE) {
  echo "Error creating table: " . $conn->error;
}
 
$date = $_POST['date'];

// Loop through the POST data to get the attendance values for each student
foreach ($_POST as $name => $attendance) {
  // Skip the 'date' field
  if ($name != 'date') {
    // Sanitize the input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $name = str_replace('_', ' ', $name);
    $attendance = mysqli_real_escape_string($conn, $attendance);

    // Insert the attendance data into the database
    $query = "INSERT INTO stuattend1 (name, attendance_date, status) VALUES ('$name', '$date', '$attendance')";
    mysqli_query($conn, $query);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="signin.css">
  <style>
    /* CSS styles here */
  </style>
</head>
<body id="form">
  <br>
  <br>
  <h2 style="text-align: center">Attendance Recorded Successfully!</h2>
  <a href="attendance12.php"><button>Done!</a></button>
  </body>
</html>
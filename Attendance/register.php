<?php
$servername = "localhost";
$username = "root";
$password = "Gowthamk@0906=18";
$dbname = "logindb";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS attendance_register (
    name VARCHAR(255),
    id VARCHAR(20)
)";

if ($conn->query($createTableSQL) === FALSE) {
    echo "Error creating table: " . $conn->error;
}

// Get form data
$name = $_POST['name'];
$id = $_POST['idnum'];

// Use prepared statements with placeholders to handle data securely
$sql = "INSERT INTO attendance_register (name, id) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters to the statement
    mysqli_stmt_bind_param($stmt, "ss", $name, $id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "New Record Created Successfully";
        echo "<script>
                window.location.href='attendance12.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "Alabastro_8";
$database = "genshin-merch";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password for security

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO sign_up (first_name, last_name, email_address, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email_address, $username, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        // You can redirect the user to the login page or another page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
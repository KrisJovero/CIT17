<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "studentinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (id, username, email) VALUES ('$id', '$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to another HTML page passing the inserted data through URL parameters
        header("Location: OutputInfo.html?id=$id&username=$username&email=$email");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

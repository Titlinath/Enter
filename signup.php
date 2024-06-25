<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "greentech";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (username, email, password, role) VALUES ('$user', '$email', '$pass', 'user')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successful";
    header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

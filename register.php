<?php
include 'config.php';

session_start();

function authenticate_user($conn, $username, $password) {
    // Performing authentication here
    $sql = "SELECT * FROM users where username = '$username' or  email='$username'"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $valid_username = $row['username'];
        $valid_password = $row['password'];
        $valid_email = $row['email'];
        
    if (($username === $valid_username || $username === $valid_email ) && $password === $valid_password) {
        $username = $valid_username;
        return true; // Authentication successful
    } else {
        return false; // Authentication failed
    }
}
}
// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
// Verify if username and email exist
if (check_if_exists($conn, $username, $password)) {
    // Registration successful
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
} else {
    // Registration failed
    echo 'Username or password failed';
}
} else{
    echo "Form data not received";
}
?>
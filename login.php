<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yunlinweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Periksa password langsung (plaintext)
        if ($password == $row["password"]) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: home.php");
        } else {
            echo "<script>alert('Invalid Username'); window.history.go(-1);;</script>";
        }
    } else {
        echo "<script>alert('Invalid Username'); window.history.go(-1);;</script>";
    }

    $conn->close();
}
?>

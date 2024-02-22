<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "db.php";

    $username = $_POST["username"];
    $password = $_POST["password"]; // Password disimpan dalam teks terbuka
    $email = $_POST["email"];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="、css/style.css">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>

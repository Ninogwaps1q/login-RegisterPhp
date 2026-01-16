<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
$result = $conn->query("SELECT * FROM tbl_user WHERE email='$email'");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1 style="text-align:center; margin-top:100px;">
    Welcome, <?php echo $user['firstName']." ".$user['lastName']; ?>
</h1>

<p style="text-align:center;">
    <a class="logout" href="logout.php">Logout</a>
</p>

</body>
</html>

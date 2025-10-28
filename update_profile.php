<?php
session_start();
require_once("settings.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$new_email = trim($_POST['email']);

$update_query = "UPDATE user SET email='$new_email' WHERE username='$username'";

if (mysqli_query($conn, $update_query)) {
    header("Location: profile.php");
    exit();
} else {
    echo "<p> Error updating record! " . mysqli_error($conn) . "</p>";
}
?>

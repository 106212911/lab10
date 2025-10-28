<?php
session_start();
include("settings.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    } else {
        echo "You have entered a wrong username or password.";
    }
}
?>

<form method="POST">
  <h2>Login Page</h2>
  Username - <input type="text" name="username" required><br><br>
  Password - <input type="password" name="password" required><br><br>
  <input type="submit" value="Log in">
</form>

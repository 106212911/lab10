<?php
$host = "localhost";
$user = "root";
$pwd  = "";  
$sql_db = "user";

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p> Database connection failure </p>";
}
?>

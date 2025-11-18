<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "todo_app";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database Connection Failed!");
}
?>

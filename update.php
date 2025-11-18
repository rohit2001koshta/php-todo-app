<?php
include 'config.php';

$id = $_GET['id'];

$query = "UPDATE tasks SET status=1 WHERE id=$id";
mysqli_query($conn, $query);

header("Location: index.php");
?>

<?php

// Create Database
$conn = mysqli_connect("localhost:3330", "root", "khunTun1997", "ajax_projects");

$query = "SELECT * FROM users";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQL_ASSOC);

echo json_encode($users);

?>
<?php
session_start();
    
    include("dbConnection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is HOME</h1>
    <br>
</body>
</html>
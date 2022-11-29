<?php
session_start();

    include("dbConnection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);
            header("Location: login.php");
        }else{
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login_signup.css">
</head>
<body>
    <div id="box">
        <div class="hText">Sign Up</div>
        <form method="post">
            <input id="text" type="text" name="user_name"><br><br>
            <input id="text" type="password" name="password"><br><br>
            <input id="button" type="submit" value="signup"><br><br>
            <a id="no_u" href="login.php">Click Here to Login</a>
        </form>
    </div>
</body>
</html>
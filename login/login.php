<?php
session_start();

include("dbConnection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        
        //read from database
        $query = "Select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header('Location: index.php');
                    die;
                }
            }
        }
        echo "Wrong username or password!"; //put js alert box
    }else{
        echo "Wrong username or password!"; //put js alert box
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login_signup.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="images/login.jpg" alt="donut boi"></div>
                <div class="formBx">
                    <form method="post">
                        <h2>Sign In</h2>
                        <input type="text" placeholder="Username" name="user_name">
                        <input type="password" placeholder="Password" name="password">
                        <input type="submit" value="Login">
                        <p class="signup">don't have an account? <a href="signup.php" onclick="toggleForm();">Sign up.</a>
                        <br><a href="Intro page.html">Return to home page</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
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
            die;
        }else{
            echo "Please enter some valid information!"; //put js alert box
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
    <section>
         <div class="container">
            <div class="user siginpBx">
                <div class="imgBx"><img src="images/signup.jpg" alt="library nap"></div>
                <div class="formBx">
                    <form method="post">
                        <h2>Sign Up</h2>
                        <input type="text" placeholder="Username" name="user_name">
                        <input type="password" placeholder="Create Password" name="password">
                        <input id="redbutton" type="submit" value="Sign Up">
                        <p class="signup">Already have an account? <a href="login.php">Sign In.</a>
                        <br><a href="Intro page.html">Return to home page</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
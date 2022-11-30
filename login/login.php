<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login_signup_new.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="images/login.jpg" alt="donut boi"></div>
                <div class="formBx">
                    <form method="post">
                        <h2>Sign In</h2>
                        <input id="text" type="text" placeholder="Username" name="user_name">
                        <input id="text" type="password" placeholder="Password" name="password">
                        <input id="button" type="submit" value="Login">
                        <p class="signup">don't have an account? <a href="signup.php" onclick="toggleForm();">Sign up.</a>
                        <br><a href="Intro page.html">Return to home page</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
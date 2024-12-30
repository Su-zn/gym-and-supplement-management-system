
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title>gym website </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
<link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['submit'])) {
        $username = stripslashes($_POST['username']);   
        $password = stripslashes($_POST['password']);
        $query    = "SELECT * FROM `loginsystem` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows) {
            $_SESSION['username'] = $username;
            header("Location: index1.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<body>


<section class="sign-up-form">
    <form method="post" action="#0">
    <div class="sign-up-form" id="sign up">
        <img src="images\user icon.png">
        <h1>Login</h1>
            <input type="text" name="username" class="input-box" placeholder="username" required>
            <br><br>
            <input type="password" name="password"class="input-box" placeholder="Password" required>
            <br><br>
            <button type="submit" name="submit" class="signup-btn">login</button>
            <p>You dont have Account?<a href="signup.php">Signup</a>
            </form>
            </div>
</section>
</body>
</html>
<?php
    }
?>
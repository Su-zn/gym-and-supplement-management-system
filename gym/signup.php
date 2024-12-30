
<!DOCTYPE html>
<html lang="en">
<head>
    <title>gym website </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
<link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
   
<section class="sign-up-form">
    <form method="post" action="sucess.php">
    <div class="sign=up-form" id="sign up">
        <img src="images\user icon.png">
        <h1>sign up</h1>
            <input type="text"  name="fname" class="input-box" placeholder="First Name" required>
            <br><br>
            <input type="text" name="lname" class="input-box" placeholder="Last Name" required>
            <br><br>
            <input type="text" name="username" class="input-box" placeholder="username" required>
            <br><br>
            <input type="email" name="email" class="input-box" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Valid the email address" placeholder="email" required>
            <br><br>
            <input type="password" name="password"class="input-box" placeholder="Password" required>
            <br><br>
            <button type="submit" name="submit" class="signup-btn">signup</button>
            <p>Already have an account?<a href="login.php">login</a>
            </form>
            </div>
</section>
</body>
</html>


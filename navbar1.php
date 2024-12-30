<?php 
if(isset($_SESSION['username'])){
    header('Location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title>gym website </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
<link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
    <nav>
        <a href="navbar.php"><img src="images\logo final.png"></a>
        <div class="nav-links">
        <i class="fa fa-times"></i>
        <ul>
        <li>
           <li><a href="index.php">HOME</a><li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="index2.php">SHOP</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="signup.php">SIGNUP</a></li>
            <li><a href="contact.php">CONTACT US</a></li> 
           <li><a href="mycart.php" class="btn btn-outline-sucess">MY CART</a></li>

        </ul>
        </li>
        </div>
        <?php include  'dashboard.php'; ?>
    </nav>
</section>
</body>
</html>
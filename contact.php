<?php
    $con = mysqli_connect("localhost","root","","testing");
    // Check connection
    if (!$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
if(isset($_POST['submit'])){
    $name = $_POST['name'];
  $phone=$_POST['phone'];
   $email = $_POST['email'];
   $msg=$_POST['msg'];
   $sqll = "INSERT INTO `contact`(name,phone,email,msg) VALUES('$name','$phone','$email','$msg')";
   $results=mysqli_query($con,$sqll);
if($results){
    echo "<script>alert('submitted sucessfully')</script>";
    header('Location:contact.php');
}
else{
    echo 'error';
}
}
?>
<?php
include("navbar1.php");
?>
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
<body>
    <form method="POST" action="contact.php">
<section class="contact">
        <h2 class="text-center">Contact Us</h2>
        <div class="form">
        <input class="form-input" type="name" name="name" placeholder="Enter Your Name" required>
        <input class="form-input" type="number" name="phone" placeholder="Enter Your phone" required>
        <input class="form-input" type="email" name="email" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Valid the email address" placeholder="Enter Your Email" required>
        <br>
        <textarea name="msg" cols="30" rows="10" placeholder="Ellaborate your concern!!!!"></textarea><br>
        <button type="submit" name="submit" value="submit">Submit</button>
        </div>
</section>
    </form>
    <footer>
        <p class="text-center">
            copyright &copy;2027 GYM AND SUPPLEMENTS STORE - All Right Reserved.
        </p>
    </footer>
</body>
</html>
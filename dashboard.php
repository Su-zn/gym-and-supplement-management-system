<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>Hey , <?php echo $_SESSION['username'];?>!</p>
        <br>
          <span>  <a href="logout.php" type="button" >Logout</a></span><br>
</body>
</html>
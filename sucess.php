<?php
include 'db.php';
?>
<?php
if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $create_datetime = date("Y-m-d H:m:s");

        $sql = "SELECT * FROM loginsystem WHERE email='$email' LIMIT 1";
        $results = mysqli_query($con,$sql);

        if(mysqli_num_rows($results) > 0){
            echo "<p class='link'>Email  Already Exists.<p>
            <p class='link'>Click here to <a href='signup.php'>Sign-up</a> again.</p>";
        }
        else{
        $query    = "INSERT into `loginsystem` (fname,lname,username,email,password,date_time)
                     VALUES ('$fname','$lname','$username','$email','" . md5($password) . "','$create_datetime')";
        $correct   = mysqli_query($con, $query);

           if ($correct) {
            echo  header("Location: login.php");
        } else {
            echo "<div class='form'>
                <h3>Invalid Registration.</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>Sign-up</a> again.</p>
                  </div>";
        }
    }
}
?>
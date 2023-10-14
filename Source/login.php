<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-FitFlow</title>
    <link rel="icon" type="image/x-icon" href="images/icon1.jpg">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container fade">
     
      
       
        <div class="center">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
               
                <div class="pass">Forget Password?</div>
                <input name="submit" type="Submit" value="Login">
                <div class="signup_link">
                    Not a Member ? <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>
    
      </div>

<?php


session_start();

    error_reporting(E_ALL ^ E_WARNING); 

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'kasun', 'kasun123', 'fitflow');

    
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stml = $conn->prepare("select username, password from user where username = ? ");
        $stml->bind_param("s",$username);
        $stml->execute();

        $stml->store_result();
        $stml->bind_result($user,$pass);
        $stml->fetch();

        if($username == $user && $password == $pass)
        { echo "<script> document.location='dashboard.php'</script>"; }

        else { echo"<script>
            alert('Wrong Username or Password');</script>";}

          }
          $stml->close();
          $conn->close();
          $_SESSION['uname'] = $username;
?>

</body>
</html>
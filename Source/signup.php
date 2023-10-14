<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp-FitFlow</title>
    <link rel="icon" type="image/x-icon" href="images/icon1.jpg">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container "  >
     
      
       
        <div class="center fade">
            <h1>SignUp</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="txt_field">
                    <input type="text" name="fname"  required>
                    <span></span>
                    <label>First Name</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="lname"  required>
                    <span></span>
                    <label>Last Name</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>UserName</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
               
                <input style="margin: 0 0 20px 0;" name="submit" type="Submit" value="Signup">
               
            </form>
        </div>
    
      </div>

      <?php
    session_start();
    error_reporting(E_ALL ^ E_WARNING); 
    ini_set('display_errors', 0);

    $name = $_POST['fname'] . " " . $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];  

    $conn = new mysqli('localhost', 'kasun', 'kasun123', 'fitflow');

    
if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else {
    $stml = $conn->prepare("insert into user(username,password,name, email) values(?,?,?,?)");
    $stml->bind_param("ssss",$username,$password,$name, $email);
    $stml->execute();
    echo "<script> document.location='question.php'</script>";
    $stml->close();
    $conn->close();
    $_SESSION['uname'] = $username;
}
?>
</body>
</html>
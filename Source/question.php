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
            <h1>Personal Information</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="txt_field">
                    <input type="number" name="age" required>
                    <span></span>
                    <label>Age</label>
                </div>
                <div>
                    <label>Gender : </label>
                    <input type="radio" value="male" name="gender"> <label style="color: beige;">Male</label>
                    <input type="radio" value="female" name="gender"><label  style="color: beige;"> Female</label>   
                 </div>
                 <div class="txt_field">
                   <input type="number" name="height" required>
                    <span></span>
                    <label>Height(cm)</label>
                 </div>
                 <div class="txt_field">
                   <input type="number" name="weight" required>
                    <span></span>
                    <label>Weight(kg)</label>
                 </div>
                 <div style="margin-bottom: 30px;">
                    <label>Body type :</label>
                    <select name="body">
                        <option name="body" value="skinny"> Skinny</option>
                        <option name="body" value="Muscular"> Muscular</option>
                        <option name="body" value="Curvy Type">Curvy</option>
                    </select>
                    <span></span>
                 </div>
              
               
                <input  style="margin: 0 0 20px 0;" name="submit" type="Submit" value="Signup">
               
            </form>
        </div>
    
      </div>

      <?php
    session_start();
    error_reporting(E_ALL ^ E_WARNING); 
    ini_set('display_errors', 0);

    $username = $_SESSION['uname'];
    
     $age = $_POST['age']; 
     $gender = $_POST['gender'];
     $height = $_POST['height'];
     $weight = $_POST['weight'];
     $body = $_POST['body'];    
     $bmi = $weight/( ($height/100)*($height/100));

     $conn = new mysqli('localhost', 'kasun', 'kasun123', 'fitflow');
    
if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else {




$stml = $conn->prepare("insert into data(username,age,height, weight,gender,body,bmi) values(?,?,?,?,?,?,?)");
    $stml->bind_param("sssssss",$username,$age,$height, $weight,$gender,$body,$bmi);
    $stml->execute();

    echo "<script> window.alert('Your Account Has Been Successfully Created'); document.location='login.html'</script>";

       
    $stml->close();
    $conn->close();
}

$_SESSION['uname'] = $username;

      ?>



</div>
</body>
</html>
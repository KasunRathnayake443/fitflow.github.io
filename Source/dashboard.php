<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="images/icon1.jpg">
    <link rel="stylesheet" href="css/dashboard 1.css">


    
</head>
<body>

<?php

session_start();
error_reporting(E_ALL ^ E_WARNING); 
ini_set('display_errors', 0);

$username = $_SESSION['uname'];

$conn = new mysqli('localhost', 'kasun', 'kasun123', 'fitflow');

    
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stml = $conn->prepare("select name from user where username = ? ");
        $stml->bind_param("s",$username);
        $stml->execute();

        $stml->store_result();
        $stml->bind_result($name);
        $stml->fetch();

        $stml = $conn->prepare("select age, height, weight, gender, body,bmi from data where username = ? ");
        $stml->bind_param("s",$username);
        $stml->execute();

        $stml->store_result();
        $stml->bind_result($age,$height,$weight,$gender,$body,$bmi);
        $stml->fetch();

         }
         $stml->close();
         $conn->close();

         $bmiarrow = 20 ;

         if($bmi>= 18.5 && $bmi<=24.9)
         { $bmicolor = "rgb(21 237 47 / 71%)"; $bmiword = "Normal";}
         if($bmi>= 25 && $bmi<=29.9)
         {$bmicolor = "rgb(198 233 15 / 73%)"; $bmiword = "Overweight"; }
         if($bmi>= 30 && $bmi<=39.9)
         {$bmicolor = "rgb(241 171 20 / 73%)"; $bmiword = "Obese"; }
         if($bmi>= 40)
         {$bmicolor = "rgb(241 20 20 / 73%)"; $bmiword = "Morbidly Obese"; }

         
         
?> 

<div class="conainer">
    <div class="background" >
        <div class="icons">
            <div class="icons1">
                <a href="dashboard.php"><img class="current" src="images/dshboard/icons/1.png"></a>
                <a href="workout.php"><img src="images/dshboard/icons/2.png"></a>
                <a href="diets.php"><img src="images/dshboard/icons/5.png"></a>
            </div>
            <div>
                <a href="#" id="logoutLink"> <img src="images/dshboard/icons/logout.png"></a>
                <div id="logoutModal" class="modal">
                        <div class="modal-content">
                            <p>Are you sure you want to log out?</p>
                            <button class="btn" id="confirmLogout">Logout</button>
                            <button class="btn cancel" id="cancelLogout">Cancel</button>
                        </div>
                 </div>
                 <script src="js/logout.js"></script>
            </div>
                
        </div>
        <div style="margin-left: 150px; margin-top: 10px;">
            <div class="header">
                <div>
                    <h5>Primary</h5>
                    <h2>Dashboard</h2>
                </div>
                <div style="display: flex;">
                    <?php echo"<h2>$name</h2>";?> 
                    <img height="40px" width="40px" src="images/dshboard/icons/account.png">
                </div>
            </div>

            <div class="container2">
                <div class="summery">
                    <div><h3>Personal Information</h3></div>
                    <div class="personalinfo"> 
                        <div style="margin-left: 30px;">
                            <?php echo"<h3>Name : $name</h3>"; ?> 
                            <?php echo"<h3> Age : $age</h3>"; ?>
                            <?php echo"<h3> Gender : $gender</h3>"; ?>
                        </div>
                        <div style="margin-right: 30px;">
                           <?php echo"<h3>Height : $height cm</h3>";?>
                            <?php echo"<h3>Weight : $weight kg</h3>";?>
                            <?php echo" <h3>Body : $body</h3>";?>
                        </div>
                    </div>  
                </div>

                <div>
                    <div style="background-color: <?php echo"$bmicolor";?>;" class="bmi">
                        <div class="bmi1">
                            <img src="images/dshboard/icons/bmi.png">
                            <h3><?php echo"$bmi - $bmiword";?></h3>
                        </div>
                        <div style="margin:10px";>
                            <h4>18.5 to 24.9 is a healthy BMI for men</h4>
                        </div>
                    </div>
                    <div class="joggin">
                        <div class="joggin1">
                            <img src="images/dshboard/icons/4.png">
                            <h3>My Jogging</h3>
                        </div>
                        <div style="margin:10px";>
                            <h3>Recomended : 8000 steps</h3>
                        </div>
                    </div>
                </div>  
            </div>

            <div style="margin-bottom: 30px;" class="header">
                <div>
                    <h2>Daily Tasks</h2>
                </div>
            </div>

            <div style="margin-bottom: 30px;" class="container2">
                    <div class="tasks">
                        <img src="images/dshboard/icons/6.png">
                        <h3>Bicycle</h3>
                            <h4>10km/Daily</h4>
                    </div>
                    <div class="tasks">
                        <img src="images/dshboard/icons/7.png">
                        <h3>Pullups</h3>
                            <h4>50 Pullups/Daily</h4>
                    </div>
                    <div class="tasks">
                        <img src="images/dshboard/icons/8.png">
                        <h3>Deadlift</h3>
                            <h4>10 Deadlifts/Daily</h4>
                    </div>
                    <div class="tasks">
                        <img src="images/dshboard/icons/9.png">
                        <h3>Dumbbell Bench </h3>
                            <h4>20 Bench Press/Daily</h4>
                    </div>
                    
            </div>
            
            
            <div class="container2">
                <div class="tasks">
                    <img src="images/dshboard/icons/10.png">
                    <h3>Kettlebell</h3>
                        <h4>20 Kettlebells/Daily</h4>
                </div>
                <div class="tasks">
                    <img src="images/dshboard/icons/11.png">
                    <h3>Squat</h3>
                        <h4>30 Squat/Daily</h4>
                </div>
                <div class="tasks">
                    <img src="images/dshboard/icons/12.png">
                    <h3>Pushup</h3>
                        <h4>50 Pushups/Daily</h4>
                </div>
                <div class="tasks">
                    <img src="images/dshboard/icons/9.png">
                    <h3>Dumbbell Bench </h3>
                        <h4>20 Bench Press/Daily</h4>
                </div>
                
            </div>
        
        
        </div>
    </div

   
</div>








</body>
</html>
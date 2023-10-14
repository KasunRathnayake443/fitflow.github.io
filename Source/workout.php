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

  

         }
         $stml->close();
         $conn->close();
        
?> 

<div class="conainer">
    <div class="background" >
        <div class="icons">
            <div class="icons1">
                <a href="dashboard.php"><img  src="images/dshboard/icons/1.png"></a>
                <a href="workout.php"><img class="current" src="images/dshboard/icons/2.png"></a>
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
                    <h2>Workouts</h2>
                </div>
                <div style="display: flex;">
                    <?php echo"<h2>$name</h2>";?> 
                    <img height="40px" width="40px" src="images/dshboard/icons/account.png">
                </div>
            </div>

            <div class="container2">

                <div class="workoutmain">
                        <div id="wid1" class="workout">
                            <div class="workoutimg"><img src="images/workout/1.jpg"></div>
                            <div class="workouttext">
                                <h3>Plank</h3>
                                <p>Often overlooked, but core exercises have a great carry over to nearly all your other exercises in terms of strength and stability.</p>
                                
                            </div>
                        </div>
                        <div id="wid2" class="workout">
                            <div class="workoutimg"><img src="images/workout/2.jpg"></div>
                            <div class="workouttext">
                                <h3>Squats</h3>
                                <p>Whether it’s barbell, dumbbell or goblet style to ease the spinal compression, squats are an absolute foundation of leg training. They can be easily 
                                    adapted too for people with poorer joints.</p>                               
                            </div>
                        </div>
                        <div id="wid3" class="workout">
                            <div class="workoutimg"><img src="images/workout/3.jpg"></div>
                            <div class="workouttext">
                                <h3>Bent Over Rows</h3>
                                <p>One of the best back exercises you can do! It isolates the muscles in the back, lats, shoulders, glutes and hamstrings which 
                                    makes it an ideal tool for strength training.</p>                               
                            </div>
                        </div>
                        <div id="wid4" class="workout">
                            <div class="workoutimg"> <img src="images/workout/4.jpg"></div>
                            <div class="workouttext">
                                <h3>Bench press</h3>
                                <p>Another great upper body exercises that will work your chest, shoulders and triceps. Another foundation ‘pushing’ 
                                    exercise that will help you to get stronger and more defined in your upper body.</p>                               
                            </div>
                        </div>
                        <div id="wid1" class="workout">
                            <div class="workoutimg"><img src="images/workout/5.jpg"></div>
                            <div class="workouttext">
                                <h3>Romanian Deadlift</h3>
                                <p>Not only are romanian deadlifts great for working your hamstrings, glutes and lower back, but they’re 
                                    also great for injury prevention. A good strong posterior chain (your back) has amazing carry over to your
                                    overall mobility, movement and strength too.</p>         
                            </div>
                        </div>
                        <div id="wid2" class="workout">
                            <div class="workoutimg"><img src="images/workout/6.jpg"></div>
                            <div class="workouttext">
                                <h3>Hip Thrusts</h3>
                                <p>A favorite among women in the gym, although men certainly shouldn’t be
                                    skimping on this exercise…The glutes are the biggest set of muscles in your
                                    body (relative size). This move hits them directly. Strong glutes will
                                    help with a healthy back, flexibility, injury
                                    prevention and carry over to aid lifts like the squat and deadlift.</p>                               
                            </div>
                        </div>
                        <div id="wid3" class="workout">
                            <div class="workoutimg"><img src="images/workout/7.jpg"></div>
                            <div class="workouttext">
                                <h3>Push Ups</h3>
                                <p>Push ups are beneficial for building upper body strength. They work the 
                                    triceps, pectoral muscles, and shoulders. When done with correct form,
                                    they can strengthen the lower back and core too! Pushups are a fast and
                                    effective exercise for building your strength.</p>                               
                            </div>
                        </div>
                        <div id="wid4" class="workout">
                            <div class="workoutimg"> <img src="images/workout/8.jpg"></div>
                            <div class="workouttext">
                                <h3>Pull Ups / Inverted Rows</h3>
                                <p>Another great back exercise that will work it like no other. It also demands
                                    good core strength, total upper body strength and will work your grip too.
                                    Pull ups can be done full, assisted or even inverted as great variety.</p>                               
                            </div>
                        </div>
                        <div id="wid2" class="workout">
                            <div class="workoutimg"><img src="images/workout/9.jpg"></div>
                            <div class="workouttext">
                                <h3>Hamstring Curl</h3>
                                <p>Everyone focuses on the exercises that they can ‘see’ i.e. all the front muscles.
                                    But hamstrings are yet another reason to give your posterior chain some love.
                                    Strong hamstrings enable your knees, legs, back, and hips to function smoothly 
                                    and provide protection from injuries. Hamstring strengthening exercises can improve
                                    overall leg strength, relieve lower back pain, and increase flexibility.</p>                               
                            </div>
                        </div>
                        <div id="wid3" class="workout">
                            <div class="workoutimg"><img src="images/workout/10.jpg"></div>
                            <div class="workouttext">
                                <h3>Overhead press</h3>
                                <p>Some prefer the standing barbell overhead press to bench press itself. This 
                                    exercise demands huge effort from your abs and all the assistance muscles that get 
                                    used to press the barbell (or dumbbells) overhead; this move can help massively develop 
                                    your shoulders and chest and can be done standing or seated.</p>                               
                            </div>
                        </div>
                </div>    
                
            </div>   
        
        </div>
    </div

   
</div>








</body>
</html>
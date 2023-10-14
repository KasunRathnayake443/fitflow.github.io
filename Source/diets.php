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
                <a href="dashboard.php"><img src="images/dshboard/icons/1.png"></a>
                <a href="workout.php"><img src="images/dshboard/icons/2.png"></a>
                <a href="diets.php"><img  class="current" src="images/dshboard/icons/5.png"></a>
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
                    <h5>Diets</h5>
                    <h2>Breakfasts</h2>
                </div>
                <div style="display: flex;">
                    <?php echo"<h2>$name</h2>";?> 
                    <img height="40px" width="40px" src="images/dshboard/icons/account.png">
                </div>
            </div>

            <div class="container2">
               
                <div class="dietsmain">
                    <div id="id1" class="diets">
                        <div class="dietsimg"><img src="images/diets/1.jpg"></div>
                        <div class="dietstext">
                            <h3>Egg Breakfast</h3>
                            <p>If you’re someone who wants to prioritize protein in your breakfast, 
                                egg recipes are a great choice. Breakfast scrambles, omelets, and plain 
                                fried eggs can get repetitive, so try one of the recipes below to change things up.</p>
                                <ul>
                                    <li>Frittata</li>
                                    <li>Burritos</li>
                                    <li>Casserole</li>
                                    <li>Veggie Frittata Muffins</li>
                                    <li>Breakfast Panzanella</li>
                                    <li>Shakshuka with Spinach & Harissa</li>
                                    <li>Butternut Squash Breakfast Hash</li>
                                </ul>
                        </div>
                    </div>
                    <div id="id2" class="diets">
                        <div class="dietsimg"><img src="images/diets/2.jpg"></div>
                        <div class="dietstext">
                            <h3>Healthy Breakfast Smoothies</h3>
                            <p>Smoothies are some of the best breakfast recipes, as they pack a big serving 
                                of fruits and veggies into your first meal of the day.</p>
                                <ul>
                                    <li>Strawberry Banana Smoothie</li>
                                    <li>Creamy Avocado Smoothie</li>
                                    <li>Coffee Smoothie</li>
                                    <li>Blueberry Smoothie</li>
                                    <li>Mango Smoothie</li>
                                    <li>Sunshine Smoothie</li>
                                    <li>Butternut Squash Breakfast Hash</li>
                                </ul>
                        </div>
                    </div>
                    <div id="id3" class="diets">
                        <div class="dietsimg"><img src="images/diets/3.jpg"></div>
                        <div class="dietstext">
                            <h3>Healthy Breakfast Bowls</h3>
                            <p>If you’re looking for some new, out-of-the-box breakfast ideas, a breakfast bowl might 
                                be the thing for you. In this category, almost anything goes.</p>
                                <ul>
                                    <li>Avocado & Egg Brown Rice Bowls</li>
                                    <li>Farmers Market Breakfast Bowls</li>
                                    <li>Berry Superfood Smoothie Bowl</li>
                                    <li>Easy Chia Pudding</li>
                                    <li>Cinnamon Quinoa Breakfast Bowl</li>
                                    <li>Rainbow Chard, Wheatberries, & Soft Boiled Eggs</li>                                 
                                </ul>
                        </div>
                    </div>
                    <div id="id4" class="diets">
                        <div class="dietsimg"> <img src="images/diets/4.jpg"></div>
                        <div class="dietstext">
                            <h3>Quick Bread Breakfast Recipes</h3>
                            <p>Moist, comforting, and lightly sweet, quick bread is a delectable breakfast option.
                                 In the summer, I almost always have individual slices of zucchini bread in my freezer.</p>
                                <ul>
                                    <li>Healthy Banana Bread</li>
                                    <li>Blueberry Muffins</li>
                                    <li>Best Zucchini Bread</li>
                                    <li>Pumpkin Bread</li>
                                    <li>Pumpkin Cranberry Nut & Seed Loaf</li>
                                    <li>Vegan Pumpkin Bread</li>                                 
                                </ul>
                        </div>
                    </div>
                   
                </div>
                
            </div>
            <div class="header">
                    <div>
                        <h5>Diets</h5>
                        <h2>Lunch</h2>
                    </div>    
            </div>
            <div class="container2">
               
                <div  class="dietsmain">
                    <div id="id1" class="diets">
                        <div class="dietsimg"><img src="images/diets/5.jpg"></div>
                        <div class="dietstext">
                            <h3>Sandwich and Wrap</h3>
                            <p>When it comes to quick and easy lunch ideas, you can never go wrong with a good sandwich!</p>
                                <ul>
                                    <li>Egg Salad Sandwich</li>
                                    <li>Chickpea Salad Sandwich</li>
                                    <li>Caprese Sandwich</li>
                                    <li>Veggie Frittata Muffins</li>
                                    <li>Chickpea Shawarma Wraps</li>
                                   
                                </ul>
                        </div>
                    </div>
                    <div id="id2" class="diets">
                        <div class="dietsimg"><img src="images/diets/7.jpg"></div>
                        <div class="dietstext">
                            <h3>Grain Bowl Lunch Ideas</h3>
                            <p>Equal parts filling, flavorful, and fresh, grain bowls are everyones go-to
                                 healthy lunch ideas.</p>
                                <ul>
                                    <li>Mediterranean Quinoa Bowl</li>
                                    <li>Sushi Bowl</li>
                                    <li>Burrito Bowl</li>
                                    <li>Veggie Power Bowl</li>
                                    <li>Mango Ginger Rice Bowl</li>
                                    <li>Roasted Veggie Grain Bowl</li>
                                    
                                </ul>
                        </div>
                    </div>
                    <div id="id3" class="diets">
                        <div class="dietsimg"><img src="images/diets/6.jpg"></div>
                        <div class="dietstext">
                            <h3>Lunch Ideas for Noodle Lovers</h3>
                            <p>Not in the mood for a lunchtime salad or sandwich? These lunch ideas with noodles might
                                 just hit the spot.</p>
                                <ul>
                                    <li>Sesame Soba Noodles</li>
                                    <li>Fresh Spring Rolls</li>
                                    <li>Peanut Noodles</li>
                                                                     
                                </ul>
                        </div>
                    </div>
                    <div id="id4" class="diets">
                        <div class="dietsimg"><img src="images/diets/8.jpg"></div>
                        <div class="dietstext">
                            <h3>Bountiful Green Salads for Lunch</h3>
                            <p>If you love lunch recipes that are bursting with fresh veggies, this section is for you!
                                 You’ll find gorgeous green salads that are big and bountiful enough to keep you full all afternoon</p>
                                <ul>
                                    <li>Kale Salad</li>
                                    <li>weet Potato Salad</li>
                                    <li>Homemade Caesar Salad</li>
                                    <li>Kale Caesar Salad</li>
                                    <li>Healthy Taco Salad</li>
                                                                
                                </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header">
                    <div>
                        <h5>Diets</h5>
                        <h2>Dinner</h2>
                    </div>    
            </div>
            <div class="container2">
               
                <div  class="dietsmain">
                    <div id="id1" class="diets">
                        <div class="dietsimg"><img src="images/diets/9.jpg"></div>
                        <div class="dietstext">
                            <h3>Soup Fall</h3>
                            <p>It might be chilly outside, but there’s a hot pot of soup bubbling away on the 
                                stove, and the kitchen is filled with the comforting scent of aromatic veggies and herbs.</p>
                                <ul>
                                    <li>Butternut Squash Soup</li>
                                    <li>Easy Vegetarian Chili</li>
                                    <li>Cream of Mushroom Soup</li>
                                    <li>Vegetable Soup</li>
                                    <li>Carrot Ginger Soup</li>
                                    <li>Creamy Wild Rice Soup</li>
                                    <li>Creamy Potato Soup</li>
                                </ul>
                        </div>
                    </div>
                    <div id="id2" class="diets">
                        <div class="dietsimg"><img src="images/diets/10.jpg"></div>
                        <div class="dietstext">
                            <h3>Salad Fall </h3>
                            <p> Packed with shades of red, orange, pink, and green, they’re a 
                                feast for the eyes as well as the tastebuds.</p>
                                <ul>
                                    <li>Sweet Potato Salad</li>
                                    <li>Kale Salad with Carrot-Ginger Dressing</li>
                                    <li>Pomegranate Salad with Cider Dressing</li>
                                    <li>Shredded Brussels Sprouts Salad</li>
                                    <li>Butternut Squash Salad</li>
                                    <li>Farmhouse Farro Salad</li>
                                    <li>Moroccan-Spiced Carrot Salad with Lentils</li>
                                </ul>
                        </div>
                    </div>
                    <div id="id3" class="diets">
                        <div class="dietsimg"><img src="images/diets/11.jpg"></div>
                        <div class="dietstext">
                            <h3>Vegetable Side Dishes</h3>
                            <p>With sweet, creamy flesh and thin, edible skin, it’s both delicious and easy to cook.</p>
                                <ul>
                                    <li>Roasted Delicata Squash with Apples</li>
                                    <li>Roasted Beets with Citrus</li>
                                    <li>Vegan Cauliflower Gratin</li>
                                    <li>Roasted Brussels Sprouts</li>
                                    <li>Roasted Cauliflower with Lemon Zest</li>
                                    <li>Creamed Spinach</li>                                 
                                </ul>
                        </div>
                    </div>
                    <div id="id4" class="diets">
                        <div class="dietsimg"><img src="images/diets/12.jpg"></div>
                        <div class="dietstext">
                            <h3>Pass the Potatoes!</h3>
                            <p>ave the Sweet Potato Casserole for Thanksgiving! In the meantime, these fall recipes will satisfy any potato craving.</p>
                                <ul>
                                    <li>Roasted Garlic Mashed Potatoes</li>
                                    <li>Stuffed Sweet Potatoes</li>
                                    <li>Baked Potato</li>
                                    <li>Roasted Potatoes</li>
                                    <li>Twice Baked Sweet Potatoes</li>
                                    <li>Parsnip Puree</li>                                 
                                </ul>
                        </div>
                    </div>
                   
                </div>
                
            </div>




        </div>
             
    </div>

   
</div>








</body>
</html>
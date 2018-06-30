<!DOCTYPE html>
<!--[if IE]><![endif]-->
<html class="no-js desktop" lang="en-NG">
<head>
            <title>FoodBot Africa </title>
<link rel="shortcut icon" href="image/index.jpg" />
  <!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>FoodBot Africa </title>
           <link rel="shortcut icon" href="image/index.jpg" />
            <meta name="description" content="Search for food"/>
            <meta name="keywords" content="How to cook"/>
            <link rel="stylesheet" href="css/style.css" media="all"/>
    </head>         

        <!--[if lte IE 9]>
        <script src="/_/js/shopHeadIE-ab4399b2c089c09705e6ce591a05fc40.js"></script>
    <![endif]-->
                        <style type="text/css">
<!--
.style2 {
	color: #999999;
	font-size: 35px;
	font-weight: bold;
}
.style3 {font-size: 36px}
.style4 {
	color: #999999;
	font-weight: bold;
}
.style5 {color: #333333}
.style6 {color: #000000}
-->
                        </style>

<body class="no-foodpanda ng  home " >

    <div class="page-wrapper js-sticky-height-calculate-container">

        <div class="content-wrapper">
          <div class="homepage-area-selection-container" style="background-image: url(image/new.jpg);">
                            <span class="style6"></span>
            <header class="style6">
              <div class="container">
                    <div class="header-mobile-item left">                    </div>
                                            <a href="index.php" class="header-logo ">
<img alt="Logo" src="image/index.jpg" width="50" height="50" /></a>
<h4>FOODBOT AFRICA</h4>
                  <div class="header-links">
            <ul class="header-links__list">
              <li class="header-links__customer-account">
            <a href="mailto:info@foodbot.com.ng"
           class="js-auth-login"
           data-loading-text="Loading..."
           rel="nofollow">
            <span class="label">  <a href="mailto:info@foodbot.com.ng"> Contact Us </a></span>
        </a>    </li>
                    </ul>
                </div>
                </div>
            </header>


                            <span class="style6"></span> 
            <div class="container">

    <div class="homepage-tagline">
    <div class="homepage-headline">
        <h1>Learn How To Cook Any delicious<span class="style3"> <span class="style4">food online</span></span><span class="style2">!</span></h1>
      <h2>Best Platform To Learn How To Cook</h2>
           <h3>Good day, Which Dish will you like to prepare today? (e.g Fried Rice, etc.)</h3>
    </div>
</div>
              <div class="city">
              <div class="area">
              
              </div>

   <form action="" method="post">
    <input type="text" id="area" name="search_file" required="required" class="form-control" placeholder=" Fried Rice " />
    <span id="area-not-selected-error" class="help-inline">    </span></div>
<div class="find-food"><span class="style5"></span>
  <input type="submit" id="button" name="submit" value="Find Result" class="btn btn-primary btn-block">
  </button>
</div>
    </form>
    
    <p>
      <?php include('connect.php'); ?>
    </p>
    <p>&nbsp;</p>
    <p>
      <?php
      error_reporting(0);
      if ($_REQUEST['submit']) {
      $search_file = $_POST['search_file'];
      $sql = mysql_query("select * from dish where name like '%$search_file%' Order by name ASC") or die('Error in query : $sql. ' .mysql_error());
      
      if (empty($search_file)) {
      echo '<script language="javascript">';
      echo 'alert("Text field cannot be empty. Please Try it again.")';
      echo '</script>';
      header( "refresh:2; url=index.php" ); 
      }
      else if (mysql_num_rows($sql) > 0) 
      {            
      $i = 1;
       
      $row = mysql_fetch_array($sql);
              // Print out the contents of the entry 
    
echo '<span class=Estilo1>Food Name </span>
 <br/>  <br/> ' .  $row['name']  ; echo '<br/>';  echo '<br/>';
    echo '<span class=Estilo1>Food Ingredient(s) </span>
 <br/>  <br/> '    . $row['ing'];  echo '<br/>'; echo '<br/>';
    echo '<span class=Estilo1>Food Description </span>
 <br/>  <br/> '     .     $row['desc_name']; echo '<br/>';echo '<br/>';echo '<br/>';
            
            

    
      $i++;
      
      echo "<span class=Estilo1> Need to order your food now?...visit </span><a href='https://www.food.jumia.com.ng'>www.food.jumia.com.ng</a>";echo '<br/>';echo '<br/>';
      echo '<span class=Estilo1>Follow Us on </span>'; echo '<br/>';
 echo " <img src=image/facebook.png width=20 height=20> <a href='https://www.facebook.com/foodbotafrica'> FoodBotAfrica </a>";echo '<br/>';echo '<br/>';
 echo " <img src=image/twitter.png width=20 height=20> <a href='https://www.twitter.com/FoodBotAfrica'> FoodBotAfrica </a>";echo '<br/>';echo '<br/>';
 echo " <img src=image/images.jpg width=20 height=20> <a href='https://www.twitter.com/FoodBotAfrica'> FoodBotAfrica </a>";echo '<br/>';echo '<br/>';
      } 
      else 
      {
echo 'Hello, the food you requested for Is not available, Kindly check the Spelling or Keep checking as more dishes are currently being updated
      ';        }
      }
      ?> 
    </p>
      </div> </span>
                  <span class="metadata"><span class="time"></span></span>
                </div>
       <style type="text/css">
<!--
.Estilo1 {
  font-family: "Times New Roman", Times, serif;
  font-weight: bold;
  font-style: italic;
}
-->
</style>
    <div class="flash-messages">

   
        <div class="container">
                                </div>
    </div>

                    </div>
            <footer>
                    <div class="footer-links footer-block footer-block--no-mobile-separator footer-legal">
    <ul>
        
        <li class="footer-legal-copyright">
            &copy; Copyright 2017
        </li>
        <li><a href="https://wwww.foodbot.com.ng">
          Foodbot Africa
      </a></li>
    </ul>
</div>
    </div>
        </footer>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    </div>
</body>
</html>

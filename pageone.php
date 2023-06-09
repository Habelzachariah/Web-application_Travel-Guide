<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelConnector</title>
    <link rel="stylesheet" href="run3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
</head>

<body>
    
    <!--Header part -->
    <div class="header__banner">
        <div class="navigation">
            <img src="Images/AS.png" alt="" class="navigation__logo">
            <div class="guide__profile">
                <a href="index.php" type ="button" class ="button__now" >Explore</a>
                <img src="images/person.jpg" alt="" class="guide__profile--img">
            </div>
        </div>
        <div class="half__splitter">
            <div class="readvalue">
                <h1>      Food for soul</h1>
                <p>Chennai is a beautiful city to be . Many have visited , many have stayed
                    But have you truly lived there .<br>
                    This is your chance 
                </p>
                <form action="verify.php" method="post">
                <label>Search</label>
     	<input type="text" 
                 name="place" 
                 placeholder="Places"><br>
                 <button class="form__button" type="submit">Go</button>
                </form>
                <div id="display"></div>
                
            </div>
        </div>
    </div>

    <!--Video-->
    <div class="container">
        <div class="container__contents">
            <video autoplay muted loop id ="VideoPart" >
                <source src="vid1.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container--fade"></div>
    </div>

    <!--Places you can visit with us-->
    <div class="parent__card">
        <h2>Original Places</h2>
        <div class="parent_card_images">
            <img src="images/chennai1.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai3.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai4.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai5.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai6.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai7.jpg" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai8.jpg" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai1.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai3.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai4.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai5.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai6.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai7.jpg" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai8.jpg" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai1.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai2.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai3.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai4.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai5.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai6.webp" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai7.jpg" alt="" class="parent_cardimage parentcard_large">
            <img src="images/chennai8.jpg" alt="" class="parent_cardimage parentcard_large">
        </div>
    </div>

    <!--Best Places to grab a bite -->
    <div class="parent__card">
        <h2>Best Places to Grab a bite </h2>
        <div class="parent_card_images">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
        </div>
    </div>

    <!--Our best guides-->
    <div class="parent__card">
        <h2>Meet up with the best person to guide you</h2>
        <div class="parent_card_images">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai1.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai2.webp" alt="" class="parent_card_image ">
            <img src="images/chennai3.webp" alt="" class="parent_card_image ">
            <img src="images/chennai4.webp" alt="" class="parent_card_image ">
            <img src="images/chennai5.webp" alt="" class="parent_card_image ">
            <img src="images/chennai6.webp" alt="" class="parent_card_image ">
            <img src="images/chennai7.jpg" alt="" class="parent_card_image ">
            <img src="images/chennai8.jpg" alt="" class="parent_card_image ">
        </div>
    </div>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("modules/head.php")?>
    <meta name="description" content="Home page of the sushi website.">
    <title>Umami Sushi - Home</title>
</head>

<body>
<?php require_once("modules/header.php")?>   
<main>
<section class="container">
            <h1 class="title">Menu - Umami Sushi</h1>
            <section class="menu">
                <section class="voorgerechten menuItems">
                    <h1 class="title1 title">Voorgerechten</h1>
                    <h4>Krab hapjes</h4>
                    <img class="imagesMenu" src="images/voor1.jpg"> 
                    <p>$19</p>
                    <br><p class="line">-----------------</p><br>
                    <h4>Mini sushi's</h4>
                    <img class="imagesMenu" src="images/voor2.jpg">
                    <p>$19</p>
                </section>
                
                <section class="maingerechten menuItems" >
                    <h1 class="title2 title">Hoofdgerechten</h1>
                    <h4>2 personen Sushi bowl</h4>
                    <img class="imagesMenu" src="images/main1.jpg"> 
                    <p> $19</p>
                    <br><p class="line">-----------------</p><br>
                    <h4>Allround Sushi board</h4>
                    <img class="imagesMenu" src="images/main2.jpg"> 
                    <p>$19</p>
                </section>
                
                <section class="drink menuItems">
                    <h1 class="title3 title">Drinken</h1>
                    <h4>Water</h4>
                    <img class="imagesMenu" src="images/water.png">
                    <p>$19</p>
                    <br><p class="line">-----------------</p><br>
                    <h4>Cola</h4>
                    <img class="imagesMenu" src="images/cola.png"> 
                    <p>$19</p> 
                </section>
                
        </section>
    </section>
</main>
<?php require_once("modules/footer.php")?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("modules/head.php")?>
    <meta name="description" content="Reseveren page of the sushi website.">
    <title>Umami Sushi - Reseveren</title>
</head>

<body>
<?php require_once("modules/header.php")?>   
<main>
    <section class="container">
    <h1 class="title">Reseveren - Umami Sushi</h1>
        <section class="reseveren">
            <img class="resImg"src="images/reseveren.png">
            <form method="POST" class="formRe">
                Name:<br> <input type="text" name="name"><br>
                E-mail: <br> <input type="text" name="email"><br>
                Datum: <br> <input type="date" name="date"><br>
                <input type="submit">
            </form>
            <h2>Of bell ons hier:</h2>
            <p>+31 06 24 55 59 61</p>
        </section>
    </section>
</main>
<?php require_once("modules/footer.php")?>
</body>

</html>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/style/style.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bellota:wght@300;700&display=swap');
        </style>
        <script src="https://kit.fontawesome.com/4018be7e05.js" crossorigin="anonymous"></script>
        <title>Hackers Poulette</title> 
    </head>
    <body>
        <header>
            <?php
                include "views/partials/header.php";
            ?>
        </header>
        <main>
            <?php
                include "components/form.php";
            ?>
        </main>
        <footer>
            <?php
                include "views/partials/footer.php";
            ?>
        </footer>
    </body>
</html>
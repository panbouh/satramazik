<?php

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <title>Acceuil</title>
    </head>
    <body>
        <div id="container-main">
            <?php
                require('menu.php');
            ?>
            <a href="admin.php" id="admin">Admin</a>

            <article class="container">
                <h1>SATRAMA</h1>
                <p>Site personnel autour de tout ce que j’aurais le courage de partager : Textes, musiques, jeux...</p>
            </article>
        </div>
            <?php
                require('footer.php');
            ?>
    </body>
</html>
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
                require('menu_adm.php');
            ?>


            <article class="container">
                <h1>Add song</h1>
                <form action="add_song.php" method="POST">
                    <input type="text" name="name">Name</input>
                    <input type="text" name="description">description</input>
                    <button type="submit" name="submit" value="OK">Ajouter</button>
                </form>
            </article>
        </div>
            <?php
                require('footer.php');
            ?>
    </body>
</html>
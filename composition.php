<?php
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <title>composition</title>
    </head>
    <body>
        <div id="container-main">
            <?php
                require('menu_musique.php');
            ?>
            <div id="container-in">
                <article class="container">
                <h1>composition</h1>
                    
                </article>
                <article class="container">
                    <h1>Titre</h1>
                    <div  id="list-song">
                        <?php
                            for ($i = 0; $i < 100; $i++) {echo '<a href="#">123</a>';}
                        ?>
                    </div>
                </article>
            </div>
        </div>

        <?php
            require('footer.php');
        ?>
    </body>
</html>
<?php
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <title>Musique</title>
    </head>
    <body>
        <div id="container-main">
            <?php
                require('menu_musique.php');
            ?>
            <div id="container-in">
                <article class="container">
                    <h1>Explorations</h1>
                    <p>
                        Définition (personnelle) : Œuvre créée en temps réel, sans plan préalable ni support autre qu'une idée de départ et la relation que le créateur a avec le son émis par son instrument dans l'instant.
                    </p>
                    <p>
                        L'exploration, c'est quand on improvise dans l'inconnu total, sans trop savoir où l'on va, pour percer les secrets de la nature. Le [[synthétiseur modulaire]] est l'instrument idéal pour cela. La plupart de mes impros sont d'ailleurs des explorations, surtout celles enregistrées entre 2000 et 2010. A cette époque, je n'avais pas conscience d'être un explorateur.
                    </p>
                    <p>
                        De mes explorations sonores, je tente de ne retenir que les meilleures (celles qui me paraissent les meilleures). Il est fort probable que certaines qui figurent ici deviennent par la suite des improvisations et des compositions, si je parviens à en retrouver le chemin.
                    </p>
               </article>
                <article class="container">
                    <h1>Titre</h1>
                    <div  id="list-song">
                        <?php
                            for ($i = 0; $i < 1000; $i++) {echo '<a href="#">123</a>';}
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
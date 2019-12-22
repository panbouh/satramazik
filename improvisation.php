<?php
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <title>improvisation</title>
    </head>
    <body>
        <div id="container-main">
            <?php
                require('menu_musique.php');
            ?>
            <div id="container-in">
                <article class="container">
                <h1>Improvisations</h1>
                    <p>
                        Définition (personnelle) : Œuvre créer en temps réelle sur un support musicale préétablit (une boucle, un nuage, un idée...).
                    </p>
                    <p>
                        Le but n'est pas de débattre de savoir ce qu'est l'improvisation. De mon point de vue, il n'y a pas de débat possible. L'improvisation, c'est quand on exécute de façon non écrites des choses déjà connues en interaction avec ses envies du moment ou avec son environnement. A partir du moment où l'on sait où l'on va, même si l'illusion nous fait croire que nous ne le savons pas, il ne s'agit pas d'explorer, mais d'appliquer des acquis travaillés auparavant.
                    </p>
                    <p>
                        Il y a maintenant plus de 10 ans, j'appelais "improvisations" des pièces musicales qui étaient en réalité des explorations parce que n'avait le discernement suffisant pour les reconnaître les unes des autres. Il est sans doute inévitable que, au fil du temps, quand j'aurais une plus grande maîtrise de mon instrument, je ferai beaucoup plus d'improvisation que d'exploration. J'avoue que cela me fait un peu peur parce que je pense que je me lasserai d'une musique où il n'y aurait plus rien de nouveau* à découvrir. En même temps, je doute que cela soit possible. Si cela arrivait, c'est que je serais devenu trop vieux pour continuer à en jouer.
                    </p>

                    <p>---</p>
                    <p>* le mot nouveau signifie "nouveau pour moi*. J'ai passé l'âge des illusions qui font croire qu'on puisse encore trouver des choses nouvelles pour le monde entier.</p>
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
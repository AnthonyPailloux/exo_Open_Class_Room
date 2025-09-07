<?php
// ddéclaration des tableaux
$recettes =
    ['Goulash', 'Dombré Crevette', 'Gratin Dauphinois', 'Couscous', 'Les Burgers'];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Les Recettes de Tetelle</title>
</head>

<body>

    <header>

        <div class="header_banniere">
            <img src="" alt="">
            <img class="img_cocotier" src="./asset/image/logo_marmitedfd594ff-96d5-4b5a-a761-8d009b8621ea.png" alt="">
            <h1 class="img_cocotier">Les Recettes de Tetelle</h1>
            <img class="img_cocotier" src="./asset/image/cocotier_logoaa0b8586-8d43-4bbe-a86e-75a47926e653.png" alt="">
        </div>

    </header>

    <main>

        <nav>
            <ul>
                <li class="menu_recette">

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[0];
                        ?>
                    </a>
                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[1];
                        ?>
                    </a>
                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[2];
                        ?>
                    </a>
                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[3];
                        ?>
                    </a>

                </li>
            </ul>
        </nav>

    </main>

</body>

</html>
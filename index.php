<?php
// ddéclaration des tableaux
$recettes =
    ['Goulash', 'Dombré Crevette', 'Gratin Dauphinois', 'Couscous', 'Les Burgers', 'Les Lasagnes'];

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
                        <h2><?php
                        echo $recettes[0];
                        ?></h2>
                        <img class="img_recette" src="./asset/image/Goulash5c369533-289c-4d64-b76c-a5bcdaab899c.png" alt="#">
                    </a>

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[1];
                        ?>
                        <img class="img_recette" src="./asset/image/dombré_crevettea77e7a58-ff19-43a0-94e8-af4bd4c51092.png" alt="#">
                    </a>

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[2];
                        ?>
                        <img class="img_recette" src="./asset/image/gratin_dauphinoisee0c0a01-404a-4b4a-a5c1-30a8e5d00be7.png" alt="#">
                    </a>

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[3];
                        ?>
                        <img class="img_recette" src="./asset/image/couscous052abbd5-2359-4272-8e16-1942b23c981b.png" alt="#">
                    </a>

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[4];
                        ?>
                        <img class="img_recette" src="./asset/image/burger2abccd0b-6dca-4e36-a25c-4ed820f4c265.png" alt="#">
                    </a>

                    <a class="name_recette" href="#">
                        <?php
                        echo $recettes[5];
                        ?>
                        <img class="img_recette" src="./asset/image/lasagneb48c27c0-2325-4761-a23d-5cddbec2c6c5.png" alt="#">
                    </a>


                    

                </li>
            </ul>
        </nav>

    </main>

</body>

</html>
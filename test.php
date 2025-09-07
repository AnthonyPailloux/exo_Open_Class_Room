<?php


// echo "hello world <br>";




// $isEnabled = false;

// if ($isEnabled === true) {
//     echo "Vous êtes autorisé(e) à accéder au site ✅";
// }
// else {
//     echo "Accès refusé ❌ ";
// }



$isAllowedToEnter = "peut-être";

// SI on a l'autorisation d'entrer
if (is_numeric($isAllowedToEnter) && $isAllowedToEnter >= 18) {

    echo " tout est ok";
    // instructions à exécuter quand on est autorisé à entrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif (is_numeric($isAllowedToEnter) && $isAllowedToEnter < 18) {

    echo "Tu n'es pas autorisé";
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else  {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?<br>";
}






$isAllowedToEnter = false;

if ($isAllowedToEnter) {
    echo "Bienvenue petit nouveau. :o)";
}
else {
    echo "T'as pas le droit d'entrer !<br>";
}







$isEnabled = true;
$isOwner = false;

if ($isEnabled && $isOwner) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌<br>';
}










$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>


<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>
<h2>hello world<br></h2>

<?php endif; ?><!-- Ni le ";" après le endif -->





<?php
$grade = 16;

if ($grade === 0) {
    echo "Il faudra revoir tout le cours !";
}

elseif ($grade === 5) {
    echo "Tu dois réviser plusieurs chapitres";
}

elseif ($grade === 7) {
    echo "Il te manque quelques révisions pour atteindre la moyenne";
}

elseif ($grade === 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade === 12) {
    echo "Tu es assez bon";
}

elseif ($grade === 16) {
    echo "Tu te débrouilles très bien !<br>";
}

elseif ($grade === 20) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<?php
$grade = 10;
// method switch
switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…<br>";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>



<?php
$userAge = 18;

if ($userAge >= 18) {
    $isAdult = true;
    echo "ok";
    var_dump($userAge);
}
else {
    $isAdult = false;
    echo "ko";
}
?>





<!-- On peut faire la même chose en une seule ligne grâce à une structure ternaire : -->

<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;
    echo "ok<br>";
    var_dump($userAge);

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
    echo "ko<br>";
?>





<?php

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs.


$user1 = ['Mickaël Andrieu <br>', 'email <br>', 'S3cr3t <br>', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34


$user2 = ['anthony pailloux<br>', 'email<br>', 'hlmsiqp<br>', 39];
echo $user2[0];
echo $user2[1];
echo $user2[3];


?>







<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[2][3]; // "mathieu.nebra@exemple.com"
?>





<?php
// while ($isValid) {
//     // instructions à exécuter dans la boucle
    
// }


$lines = 1;
while($lines <= 20) 
{
        echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP<br>';
    $lines++;
    
}

$lines = 1;

while ($lines <= 20)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}


// <!--

// Ceci est la ligne n°1
// Ceci est la ligne n°2
// ...
// -->


$fruits = ["pomme", "banane", "cerise"];

foreach ($fruits as $fruit) {
    echo "J’aime les $fruit <br>";
}

?>

<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
    $counter++;
}

    echo'<br>';

for ($lines = 0; $lines <= 2; $lines++) {
    echo $users[$lines]['full_name'] . ' ' . $users[$lines]['email'] . '<br />' . ' ' . $users[$lines]['age'];
}

echo'<br>';

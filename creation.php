<?php
require 'db.php';
$creer = false;
while (!$creer) {
    $_SESSION['idPartie'] = random_int(0, 10000000);

    $bdd->query('SELECT COUNT(*) AS "partie" FROM `partie` WHERE `idPartie` == $_SESSION["idPartie"]');
    $nb = $bdd->fetch();
    if ($nb["partie"] == 0) {
        $bdd->prepare('INSERT INTO partie(`idPartie``coups`) VALUES (0)');
        $creer = true;
    }
    $creer = false;
}
header("Location: pseudo.php");


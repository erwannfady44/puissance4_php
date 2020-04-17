<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=puissance4;charset=utf8', 'puissance4', '$*5QmL7rnlNuP6:(Y23.(');

function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
?>


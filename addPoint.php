<?php
session_start();
$_SESSION["colonne"] = $_GET['j'];
header("Location: jeu.php");
?>
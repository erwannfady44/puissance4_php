<?php
class Grille
{
    private $bdd;
    private $_lesPoint = array();

    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=puissance4;charset=utf8', 'puissance4', '$*5QmL7rnlNuP6:(Y23.(');
        $req = $this->bdd->prepare('SELECT * FROM pions WHERE idPartie = ?');
        $req->execute(array($_SESSION['idPartie']));
        //initialisation des pions
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 7; $j++) {
                $this->_lesPoint[$i][$j] = -1;
            }
        }
    }

    public function getPoint($i, $j)
    {

    }

    public function addPoint($colonne) {
        for ($i = 5; $i >= 0; $i--) {
            //s'il n'y a pas de pions à cet endroit là
            if($this->_lesPoint[$i][$colonne] == -1) {
                $this->bdd->exec('INSERT INTO `pions`(`idPartie`, `idJoueur`, `numeroJoueur`) VALUES ($_SESSION["idPartie"], $_SESSION["numeroJoueur"]), $_SESSION["numeroJoueur"]) ');
                return true;
            }
        }

        return false;
    }
}
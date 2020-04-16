<?php


class Pions
{
    private $_joueur;

    public function __construct()
    {
        $this->_joueur = -1;
    }

    public function getPions()
    {
        return $this->_pions;
    }

    public function setPions($pions)
    {
        $this->_pions = $pions;
    }
}
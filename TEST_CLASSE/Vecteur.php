<?php

class Vecteur
{
    private float $coX;
    private float $coY;

    function __Vecteur($x, $y)
    {
        $this->coX = $x;
        $this->coY = $y;
    }

    public function norme() : float
    {
        return sqrt($this->coX * $this->coX + $this->coY * $this->coY);
    }
}

$a = 9.6;
$b = 4.5;
$M1 = new Vecteur;
$M1->__Vecteur($a, $b);

 echo 'Voici la norme : ' . $M1->norme();
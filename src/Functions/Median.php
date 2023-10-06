<?php

namespace Gatodev\Statistique\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        
        $order = sort($numbers);
        $effectifTotal = count($order);
        $rangDeLaMediane = ($effectifTotal + 1 )/2 ;
        //Le rang de la médiane est:
        //Un nombre entier lorsque l'effectif total est impair.
        //Un nombre décimal lorsque l'effectif total est pair.
        //Si le rang est un nombre entier, alors la médiane est la valeur située au rang correspondant.
        
        $tableau = 
        return $rangDeLaMediane;
    }
}

$serieA = [15, 8, 10, 15, 20, 14, 1 ];
?>
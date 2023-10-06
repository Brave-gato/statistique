<?php

use Gatodev\Statistique\Functions\Average;

test("vérification de la Mediane dans une serie de nombres", function () {
    
    $serieA = [15, 8, 10, 15, 20, 14, 1 ];
    $serieB = [15, 5, 10, 16, 18, 30, 20, 3];

    expect(Mediane::calculate($serieA))->toBe(14.0);
    expect(Mediane::calculate($serieB))->toBe("entre 15 et 18");
});
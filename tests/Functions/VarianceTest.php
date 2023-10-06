<?php

use Gatodev\Statistique\Functions\Average;

test("vérification d'un tableau", function () {
    
    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});
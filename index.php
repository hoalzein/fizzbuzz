<?php
require __DIR__ . "/../app/Number.php";

use App\Number;

for ($x = 1; $x <= 100; $x++) {
    $number = new Number;
    $number->value = $x;
    $number->analyse();
    $evaluation = $number->evaluate();
    echo "$evaluation <br>";
}
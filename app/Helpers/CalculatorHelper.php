<?php

namespace App\Helpers;

use Exception;

class CalculatorHelper
{
    public static function add($a, $b)
    {
        return $a + $b;
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }

    public static function perkalian($a, $b){
        return $a * $b; // ada typo harusnya *
    }

    public static function isPrimeSum($a, $b)
    {
        $sum = $a + $b;
        if ($sum < 2) return false;

        for ($i = 2; $i <= sqrt($sum); $i++) {
            if ($sum % $i === 0) {
                return false;
            }
        }
        return true;
    }

}

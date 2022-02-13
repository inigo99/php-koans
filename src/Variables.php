<?php

//declare(strict_types=1);

namespace koans;

class Variables
{
    function addTwoValues(int $firstValue, int $secondValue): int
    {
        return $firstValue + $secondValue;
    }

    function declareAnInt(): int
    {
        return "1";
    }
}
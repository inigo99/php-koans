<?php

namespace koans;

class Operators{

    // Arithmetic Operators

    function add($v1, $v2){
        return $v1 + $v2;
    }

    function substract($v1, $v2){
        return $v1 - $v2;
    }

    function multiplicate($v1, $v2){
        return $v1 * $v2;
    }

    function divide($v1, $v2){
        return $v1 / $v2;
    }

    function module($v1, $v2){
        return $v1 % $v2;
    }

    function exponent($v1, $v2){
        return pow($v1, $v2);
    }

    // Assignement Operators

    function assignVariableToAnotherVariable($v1, $v2){
        $v1 = $v2;
        return $v1;
    }

    function addVariableToAnotherVariable($v1, $v2){
        $v1 = $v1 + $v2;
        return $v1;
    }

    function multiplyVariableToAnotherVariable($v1, $v2){
        $v1 = $v1 * $v2;
        return $v1;
    }

    function divideVariableByAnotherVariable($v1, $v2){
        $v1 = $v1 / $v2;
        return $v1;
    }

    function moduleVariableByAnotherVariable($v1, $v2){
        $v1 = $v1 % $v2;
        return $v1;
    }

    // Comparison Operators

    function equal($v1, $v2): bool{
        return $v1 == $v2;
    }

    function identical($v1, $v2): bool{
        return $v1 === $v2;
    }

    function notEqual($v1, $v2): bool{
        return $v1 != $v2;
    }

    function notIdentical($v1, $v2): bool{
        return $v1 !== $v2;
    }

    function greaterThan($v1, $v2): bool{
        return $v1 > $v2;
    }

    function lessThan($v1, $v2): bool{
        return $v1 < $v2;
    }

    function greaterThanOrEqualTo($v1, $v2): bool{
        return $v1 >= $v2;
    }

    function lessThanOrEqualTo($v1, $v2): bool{
        return $v1 <= $v2;
    }

}
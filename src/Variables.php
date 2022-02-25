<?php

//declare(strict_types=1);

namespace koans;

$global = 0;

class Variables{
    function addTwoValues(int $firstValue, int $secondValue): int{
        return $firstValue + $secondValue;
    }

    function declareAnInt(): int{
        $intVariable = 1;
        return $intVariable;
    }
    function declareABoolean(): bool{
        $booleanVariable = True;
        return $booleanVariable;
    }

    function declareAFloat(): float{
        $floatVariable = 3.14159;
        return $floatVariable;
    }

    function declareAnArray(): array{
        $arrayVariable = array(declareAnInt(), declareABoolean() , declareAFloat());
        return $arrayVariable;
    }

    function declareAConstant(){
        define("constante", 1);
    }

    function declareAGlobalVariable(){
        global $global;
        $global = 1;
    }

    function declareAnIntWithNullVariable(): int{
        $intVariable = null;
        return $intVariable;
    }

    function assignAVariableValueToAnotherVariable($v1): Variables{
        $v2 = $v1;
        return $v2;
    }

    function CastStringIntToBoolean($v1): bool{
        $v2 = (bool) $v1;
        return $v2;
    }

}
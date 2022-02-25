<?php

namespace koans;

class Strings{

    // String definition

    function doubleQuotedStringsAreStrings(): string{
        return "Hola mundo";
    }

    function singleQuotedStringsAreAlsoStrings(): string{
        return 'Hola mundo';
    }

    function UseBackslashForEscapingQuotesInStrings(): string{
        return "Y dijo: \" Hola mundo\"";
    }

    function dotConcatenatesStrings(string $s1, string $s2): string{
        return $s1 . $s2;
    }

    function dotWorksWithVariables(Variables $v1, Variables $v2): Variables{
        return $v1 . $v2;
    }

    function dotEqualsAppendsToEndOfString(string $s1, string $s2): string{
        $s1 .= $s2;
        return $s1;
    }

    // String manipulation

    function getTheLengthOfAString(): int{
        $string = "hola mundo";
        return strlen($string);
    }

    function countWordsInAString(): int{
        $string = "hola mundo";
        return str_word_count($string);
    }

    function reverseAString(): string{
        return strrev("hola mundo");
    }

    function searchForATextWithinAString(): int{
        return strpos("hola mundo", "mundo");
    }

    function ReplaceTextWithinAString(): string{
        return str_replace("mundo", "planeta" , "hola mundo");
    }

}
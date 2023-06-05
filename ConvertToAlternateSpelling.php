<?php

class ConvertToAlternateSpellingTest
{
    public static function convert($input) {
        $output = str_replace(
            ['A', 'a', 'B', 'C', 'c', 'E', 'e', 'G', 'g', 'H', 'i', 'J', 'j', 'M', 'O', 'o', 'P', 'p', 'q', 'T', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'S', 's'],
            ['Α', 'а', 'В', 'С', 'с', 'Е', 'е', 'Ԍ', 'ց', 'Н', 'і', 'Ј', 'ј', 'М', 'О', 'о', 'Р', 'р', 'ԛ', 'Т', 'Ԝ', 'ԝ', 'Х', 'х', 'Ү', 'у', 'Ζ', 'Ѕ', 'ѕ'],
            $input
        );
        return $output;
    }
}
?>
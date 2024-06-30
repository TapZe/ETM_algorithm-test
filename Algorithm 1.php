<?php
function reverseAlphabets($input) {
    $length = strlen($input);
    $reversed = '';
    $digits = '';

    // Separating alphabets and digits
    for ($i = 0; $i < $length; $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) {
            $reversed .= $char;
        } else {
            $digits .= $char;
        }
    }

    // Reversing the alphabet part
    $reversed = strrev($reversed);

    // Combine the reversed alphabet with digits
    $result = $reversed . $digits;

    return $result;
}

$input = "NEGIE1";
$result = reverseAlphabets($input);
echo $result;


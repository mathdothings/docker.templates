<?php

function printNums(): string
{
    $result = "";
    $length = 10;

    for ($i = 0; $i < $length; $i++) {
        if ($i == $length - 1) {
            $result .= $i;
            break;
        }

        $result .= $i . ", ";
    }

    return $result;
}

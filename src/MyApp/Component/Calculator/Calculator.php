<?php

namespace MyApp\Component\Calculator;

class Calculator
{


    public function add( $number1, $number2)
    {
        return $number1 + $number2;
    }

    public function subtract( $number1,  $number2)
    {
        return $number1 - $number2;
    }

    public function multiply( $number1,  $number2)
    {
        return $number1 * $number2;
    }

    public function divide( $number1,  $number2)
    {
        if ($number2 == 0) {
            return 0;
        }

        return $number1 / $number2;
    }

}
<?php

namespace MyApp\Component\Calculator;


class Calculator
{


    public function add( int $number1, int $number2):int
    {
        return $number1 + $number2;
    }

    public function subtract(int  $number1, int $number2):int
    {
        return $number1 - $number2;
    }

    public function multiply(int $number1,int  $number2) :int
    {
        return $number1 * $number2;
    }

    public function divide(int  $number1, int $number2): ?float
    {
        if ($number2 === 0) {
            return null;
        }

        return (float) $number1 / $number2;
    }

}
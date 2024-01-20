<?php

class Calculator
{

    public static function plus($num1, $num2)
    {
        echo $num1 + $num2;
    }

    public static function multi($num1, $num2)
    {
        echo $num1 * $num2;
    }

    public static function div($num1, $num2)
    {
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "На 0 делить нельзя Erorr";
        }

    }

    public static function minus($num1, $num2)
    {
        echo $num1 - $num2;
    }

    public static function factorial($num)
    {
        $result = 1;
        for ($i = 1; $i <= $num; $i++) {
            $result *= $i;

        }
        echo $result;
    }
}

echo Calculator::plus(17645, 98694568) . "\n";
echo Calculator::multi(2, 9) . "\n";
echo Calculator::div(6, 0) . "\n";
echo Calculator::minus(7, 2) . "\n";
echo Calculator::factorial(6) . "\n";
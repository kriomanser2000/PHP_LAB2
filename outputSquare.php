<?php
function calculateSquare($number, $A, $B)
{
    if ($number >= $A && $number <= $B)
    {
        $square = $number * $number;
        echo "Квадрат числа: $square";
    }
    elseif ($number < $A)
    {
        $N = $A - $number;
        echo "Число менше від мінімального на $N";
    }
    else
    {
        $N = $number - $B;
        echo "Число більше від максимального на $N";
    }
}
$number = 10;
$A = 5;
$B = 15;
calculateSquare($number, $A, $B);
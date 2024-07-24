<?php
$number = 3;
function createHeaderTag($num)
{
    if ($num >= 1 && $num <= 6)
    {
        echo "<h$num>Це заголовок рівня $num</h$num>";
    }
    else
    {
        echo "Помилка: число повинно бути в діапазоні від 1 до 6.";
    }
}
createHeaderTag($number);

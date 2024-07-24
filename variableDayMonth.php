<?php
function getSeason($month)
{
    switch ($month)
    {
        case 12:
        case 1:
        case 2:
            return 'Зима';
        case 3:
        case 4:
        case 5:
            return 'Весна';
        case 6:
        case 7:
        case 8:
            return 'Літо';
        case 9:
        case 10:
        case 11:
            return 'Осінь';
        default:
            return 'Невідомий місяць';
    }
}
function getMonthName($month)
{
    $months = [
        1 => 'Січень', 2 => 'Лютий', 3 => 'Березень', 4 => 'Квітень',
        5 => 'Травень', 6 => 'Червень', 7 => 'Липень', 8 => 'Серпень',
        9 => 'Вересень', 10 => 'Жовтень', 11 => 'Листопад', 12 => 'Грудень'
    ];
    return isset($months[$month]) ? $months[$month] : 'Невідомий місяць';
}
function getHalfOfMonth($day)
{
    return ($day <= 15) ? 'Перша половина' : 'Друга половина';
}
$day = 24;
$month = 7;
$season = getSeason($month);
$monthName = getMonthName($month);
$halfOfMonth = getHalfOfMonth($day);
echo "Пора року: $season\n";
echo "Місяць: $monthName\n";
echo "Частина місяця: $halfOfMonth\n";
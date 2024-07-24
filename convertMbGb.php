<?php
function convertMemoryUnits($input_number, $from, $to)
{
    $units = [
        'bit' => 1,
        'byte' => 8,
        'KB' => 8 * 1024,
        'MB' => 8 * 1024 * 1024,
        'GB' => 8 * 1024 * 1024 * 1024,
        'TB' => 8 * 1024 * 1024 * 1024 * 1024
    ];
    if (!isset($units[$from]) || !isset($units[$to]))
    {
        throw new InvalidArgumentException('Unknown unit of memory.');
    }
    $valueInBits = $input_number * $units[$from];
    $convertedValue = $valueInBits / $units[$to];
    return $convertedValue;
}
$input_number = 1;
$from = 'GB';
$to = 'MB';
$convertedValue = convertMemoryUnits($input_number, $from, $to);
echo "$input_number $from is equal to $convertedValue $to";
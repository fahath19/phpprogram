<?php
$number1 = 10;
$number2 = 5;
$operator = 4;
echo "Number 1: $number1.<br>";
echo "Number 2: $number2.<br>";
echo "Operator: $operator.<br>";
switch ($operator)
{
 case 1:
 echo "Result:<br>" . ($number1 + $number2) . "\n";
 break;
 case 2:
 echo "Result: " . ($number1 - $number2) . "\n";
 break;
 case 3:
 echo "Result: " . ($number1 * $number2) . "\n";
 break;
 case 4:
 echo "Result: " . ($number1 / $number2) . "\n";
 break;
 default:
 echo "Invalid operator. Please use +, -, *, or /.\n";
}
?>
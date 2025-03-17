<?php
$mark=92;
if($mark<35)
echo "fail";
else if($mark<=50)
echo "the grade is third class ";
else if($mark>=51 && $mark<=74)
echo "the grade is Second class ";
else if($mark>=75 && $mark<=90)
echo "the grade is FIrst class class ";
else
echo"The Grade is Distinction ";
echo "The Mark is $mark";
?>
<?php
$big_array = array("A1", "B1", "C1", "A2", "B2", "C2");
$sub_array = array_slice($big_array, 0, 4);
echo "we want the subarray to contain the first four elements from
the big_array<br>";
echo "<pre>" . print_r($sub_array, true) . "</pre>";
$array1["A"] = "AAA";
$array1["B"] = "BBB";
$array2["A"] = "aaa";
$array_12 = array_merge($array1, $array2);
echo "when there is two identical strings keys, the last will
overwrite the first elements<br>";
echo "<pre>" . print_r($array_12, true) . "</pre>";
$array11 = array("A1", "B1", "C1");
$array22 = array("A2", "B2", "C2");
$array_1212 = array_merge($array11, $array22);
echo "when there is two identical strings keys, they will be given
another key value<br>";
echo "<pre>" . print_r($array_1212, true) . "</pre>";
?>
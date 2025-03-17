<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $DOB = $_POST['DOB'];
 $ToDate = $_POST['ToDate'];
 if (empty($DOB) || empty($ToDate)) {
 $Error = "Both input values are required.";
 } else {
 $bday = date_create_from_format('Y-m-d', $DOB);
 $today = date_create_from_format('Y-m-d', $ToDate);
 if (!$bday || !$today) {
 $Error = "Both input values must be a valid date.";
 } else {
 $DOB = $bday->format('d F Y');
 $ToDate = $today->format('d F Y');
 $age = date_diff(date_create($DOB), date_create($ToDate));
 $Result = "Birth Date: <strong>$DOB</strong><br>";
 $Result .= "Age <strong>{$age->y} Years, {$age->m} Months, {$age-
>d} Days</strong> as on <strong>{$ToDate}</strong>";
 }
 }
}
?>
<html>
<head>
<title>PHP program to find the gross salary of an employee</title>
</head>
<body>
<form method="post">
<label>Enter basic salary:</label>
<input type="text" name="salary" placeholder="Enter basic
salary" /><br>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_POST['submit'])) {
$basic_salary = $_POST['salary'];
$dallowance = 0.4 * $basic_salary;
$house_rent = 0.2 * $basic_salary;
$gross_salary = $basic_salary + $dallowance + $house_rent;
echo "Basic Salary: $basic_salary /- <br>";
echo "Dearness Allowance: $dallowance /- <br>";
echo "House Rent: $house_rent /- <br><br>";
echo "Gross Salary: $gross_salary /-";
}
?>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$fn=$_POST['fname'];
$mn=$_POST['mname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$mob=$_POST['mobile'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobby'];
$pass=$_POST['pass'];
echo "First Name: $fn<br><br>";
echo "Middle Name: $mn<br><br>";
echo "Last Name: $ln<br><br>";
echo "Email: $em<br><br>";
echo "Mobile: $mob<br><br>";
echo "City: $city<br><br>";
echo "Gender: $gender<br><br>";
echo "<h3>Hobbies</h3>";
foreach($hobbies as $hobby) {
echo "$hobby<br>";
}
}
?>
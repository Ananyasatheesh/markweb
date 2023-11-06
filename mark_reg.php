<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "students_mark_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
//php is connected to stu_registration_form DB
echo "Connection Successful". "<br>";
}
$r=$_POST["rollno"];
$m=$_POST["mat"];
$p=$_POST["phy"];
$ch=$_POST["chem"];
$psp=$_POST["psp"];
$ie=$_POST["ie"];
$ve=$_POST["ve"];
$c=$_POST["c"];

$sql = "INSERT INTO marks1 (Rollno,Maths,Physics,Chemistry,PSP,IE,ValueEducation,C)
VALUES ('$r','$m','$p','$ch','$psp','$ie','$ve','$c')";
if (mysqli_query($conn, $sql))
{
echo "New record created successfully !";
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>
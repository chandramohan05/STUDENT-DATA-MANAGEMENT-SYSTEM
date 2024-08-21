<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student_database1";
 
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

$username=$_POST["uname"];
$password=$_POST["pas"];

$sql="SELECT * FROM teacher_login WHERE username='$username' AND password='$password' ";

$result=$conn->query($sql);

if($result->num_rows >0)
{
	header("Location: insert.html");
	exit();
}
else
{
	echo '<script>alert("Your Username and Password Not Matched!");</script>';
}

$conn->close();

?>
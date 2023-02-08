
<?php

$host="mysql";
$user="root";
$pass="password";
$db="musical_world";

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>

<?php

$host="mysql";
$user="root";
$db="musical_world";
$pass="password"

$conn=mysqli_connect($host,$user,$db,$pass);

if(!$conn)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>

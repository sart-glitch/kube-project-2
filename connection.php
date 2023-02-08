
<?php

$host="mysql";
$user="root";
$db="musical_world";

$conn=mysqli_connect($host,$user,$db);

if(!$conn)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>

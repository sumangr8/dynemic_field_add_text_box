<?php
extract($_POST);
echo $name2=implode(",", $name);
$con=mysqli_connect("localhost","root","","signup");
// $qry=mysqli_query($con,"insert into login(name) values('$name')");
$number=count($name);
// if($number >0)
// {
// 	for($i=0;$i<$number;$i++)
// 	{
// 		$qry=mysqli_query($con,"insert into login (name) values ('$name[$i]')");
// 	}
// }
// else
// {

// }
?>
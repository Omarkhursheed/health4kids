<?php
if(isset($_POST['schoolemail'])&&isset($_POST['password'])){
	 $schoolemail=$_POST['schoolemail'];
	 $password=$_POST['password'];
	if(!@mysql_connect('localhost','root',''))
		echo "not connected";
	$mysql_db='hack';
	if(!@mysql_select_db($mysql_db))
		echo "select dat";
	$query="SELECT * FROM `hack`.`dtu` WHERE `Schoolemail` = '$schoolemail' and `Schoolpas` = '$password'";
	if($queryrun=mysql_query($query))
	{
		$query_num_rows=mysql_num_rows($queryrun);
		if($query_num_rows==0)
			echo "please insert correct email and password";
		else
		{
			while($query_row=mysql_fetch_assoc($queryrun)){
				echo "welcome ".$query_row['Schoolname'];
				echo "your current points are ".$query_row['schoolpoints'];
			}
		}
	}
	else
		echo "fucvl";
}
else 
	echo "fuck";
	

?>
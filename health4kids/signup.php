<?php
if(isset($_POST['schoolname'])&&isset($_POST['schoolemail'])&&isset($_POST['schoolmob'])&&isset($_POST['password'])){
	 $schoolname=$_POST['schoolname'];
	 $schoolemail=$_POST['schoolemail'];
	 $schoolmob=$_POST['schoolmob'];
	 $password=$_POST['password'];
	if(!@mysql_connect('localhost','root',''))
		echo "not connected";
	//echo $schoolemail;
	$mysql_db='hack';
	if(!@mysql_select_db($mysql_db))
		echo "select dat";
	$query="INSERT INTO `hack`.`dtu` VALUES ('$schoolname','$schoolemail','$schoolmob','$password','')";
	if($queryrun=mysql_query($query))
	{
		echo "Registered succesfully";
		header('Location: home.php');
	}
	else
		echo "fucvl";
}
else 
	echo "fuck";
	

?>
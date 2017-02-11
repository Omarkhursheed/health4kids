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
		if($query_num_rows==0){
			echo "<script> alert('PASSWORD INCORRECT');</script> ";
			echo "<script> window.location.href='login.html';</script>";
			//echo "please insert correct email and password";
			//header('location: ')
		}
		else
		{
			while($query_row=mysql_fetch_assoc($queryrun)){
				$skulname=$query_row['Schoolname'];
			$skulpoints=$query_row['schoolpoints'];?>
				<DOCTYPE html>
				<html>
				<head>
				<link rel="stylesheet" type="text/css" href="main.css">
				<title>Logged In</title>
				</head>

				<body>

				<div class="head" id="head"><center>KIDS FOR HEALTH</center></div>

				<div class="navbar" id="navbar">
					<ul>
					<li><a href="home.html" class="current">Homepage</a></li>
					<li><a href="register.html">Register to Events</a></li>
					<li><a href="past.html">Past Events</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="organise.html">Organise Events</a></li>
					<li><a href="sponsor.html">Sponsor</a></li>
					</ul>
				</div>

				<div class="content" id="content">
				<div id="x1" class="x"><a href="login.html">LOGIN</a></div>
				<div id="x2" class="x"><a href="signup.html">SIGN UP</a></div>

				<center><img src=""></center> 
				<?php 
								echo "welcome ".$skulname." ";
								echo "your current points are ".$skulpoints;
				?>
				<div id="x3" class="a"><a href="organise.html">Organise</a></div>
				<div id="x3" class="b"><a href="sponsor.html">Sponsor</a></div>
				<div id="x3" class="c"><a href=".html">XYZ</a></div>

				</div>

				</body>
				</html>
		<?php		//echo "welcome ".$query_row['Schoolname'];
				//echo "your current points are ".$query_row['schoolpoints'];
			}
		}
	}
	else
		echo "fucvl";
}
else 
	echo "fuck";
?>

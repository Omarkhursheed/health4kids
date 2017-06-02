<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<title>Home</title>
</head>

<body>

<div class="head" id="head"><center>KIDS FOR HEALTH</center></div>

<div class="navbar" id="navbar">
	<ul>
	<li><a href="home.php" class="current">Homepage</a></li>
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

<h2><center>Leaderboard</center></h2>
<div id="top">
<?php

	if(!@mysql_connect('localhost','root',''))
		echo "not connected";
	$mysql_db='hack';
	if(!@mysql_select_db($mysql_db))
		echo "select dat";
	$query="SELECT `Schoolname`,`schoolpoints` FROM `hack`.`dtu` ORDER BY `schoolpoints` desc";
	if($queryrun=mysql_query($query))
	{
		while($query_row=mysql_fetch_assoc($queryrun)){
				echo $skulname=$query_row['Schoolname']." ";
			echo $skulpoints=$query_row['schoolpoints']."<br>";
			}
	}
	else
	echo"query prblm";
?>
</div>
<div id="bottom"><p>"He who has health has hope. And he who has hope has everything."</p></div>

</div>

</body>
</html>
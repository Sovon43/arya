<?php
session_start();
//error_reporting(0);
include("connection_test.php");
if($_SESSION["parent_username"]==true)
{
echo "Welcome  ".$_SESSION['parent_username'];
}
else
{
	header('location:parents_login.php');
}

?>

<html>
<head>
 <title>Parents Homepage</title>
 <link href="s1new.css" rel="stylesheet" type="text/css" />
 
 </head>
 <body>
<form action="" method="post">
<div id="header">
<center><h1>Midnapore Collegiate School</h1></center><h3 float="right"><a href="logout.php">Log Out</a></h3>

 </div> 

 <div id="container">
   <div id="left">
    <ul>
	    <li><a href="student_profile.php">Student Profile</a></li>
		<li><a href="Contact.php">Notice</a></li>
		<li><a href="Notice.php">Holidays</a></li>
		<li><a href="History.php">Feedback</a></li>
		<li><a href="Feedback.php">Homework</a></li>
		<li><a href="Contact.php">Help</a></li>
		<li><a href="Logout.php">Logout</a></li>
     </ul>
	 </div>
	
	<div id="right"><br>

	<h2>Midnapore Collegiate School</h2>
	<pre>
	<h3>
	The school certified by heritage building. 
	The school is one of the oldest school not only West Bengal ,belongs in India.
	Estd:1865
	Total Student: 1900
	Teachers :50
	</h3>
	</pre>
	
	</div>
</div>
 </form>

 </body>
 </html>
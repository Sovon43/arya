<?php
include("connection.php");
?>
<html>
<head>
<title>Admin LogIn</title>
<link href="s1new.css" rel="stylesheet" type="text/css" />
 
 </head>
 <body>
<form method="POST">
<div id="header">
 <center><h1>Midnapore Collegiate School</h1>
</center>
 </div>
 <div id="menu">
    <ul>
	    <li><a href="home.php">Home</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Notification</a></li>
		<li><a href="#">History</a></li>
		<li><a href="#">Feedback</a></li>
		<li><a href="#">Contact Us</a></li>
		<li>
		   <a href="#">Log In</a>
		    <ul>
			<li><a href="Admin_login.php">Admin LogIn</a></li>
			<li><a href="parents_login.php">Parents LogIn</a></li>
			</ul>
		 </li>
     </ul>
	 </div>
	
	<div id="container">
	<br>
	
	<h2>Admin LogIn</h2>
	<center>
	<table>
 <tr>
   <td>Username : </td>
   <td><input type="text" name="username" placeholder="Enter your UserID" style= "width:250px; height:25px; border-radius:10px;" required> </td>
 </tr>
 <br>
 <tr>
  <td>Password :</td>
  <td><input type="password" name="password" placeholder="Enter your Password" style= "width:250px; height:25px; border-radius:10px;" required> </td>
 </tr>
 <tr>
  <td> </td>
  <td><input type="submit" name="submit" value="Log In" style= "width:100px; height:30px; border-radius:10px;" > </td>
 </tr>
</table>
</center>
	
  </div>
 </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
}
?>
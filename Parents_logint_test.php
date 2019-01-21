<?php
session_start();
include("connection.php");
?>
<html>
<head>
<title>Parents LogIn</title>
<link href="s1new.css" rel="stylesheet" type="text/css" />
 
 </head>
 <body>
<form action="" method="post">
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
			<li><a href="Parents_login.php">Parents LogIn</a></li>
			</ul>
		 </li>
     </ul>
	 </div>
	
	<div id="container">
	<br>
	
	<h2>Parents LogIn</h2>
	<center>
	<table>
 <tr>
   <td>Username: </td>
   <td><input type="text" name="username" placeholder="Enter your UserID" required> </td>
 </tr>
 <tr>
  <td>Password </td>
  <td><input type="password" name="password" placeholder="Enter your Password" required> </td>
 </tr>
 <tr>
  <td> </td>
  <td><input type="submit" name="submit" value="Log In" style= "width:100px; height:50px; border-radius:10px; color:gray;" > </td>
 </tr>
</table></center>
	
  </div>
 </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
 //the values passes from the form    
 $parent_username= $_POST['username'];	
 $parent_password= $_POST['password'];
 $query="select * from student where username='$parent_username' && password='$parent_password' ";
 $data=mysqli_query($link,$query);
 $total= mysqli_num_rows($data);
 echo=$total;
 
 
 
 
 
 /* $query="select * from student";
 $run=mysqli_query($link,$query);
 $fetch_row=mysqli_fetch_array($run);
 $fetch_username=$fetch_row['username'];
 $fetch_password=$fetch_row['password'];
if($parent_username==$fetch_username && $parent_password==$fetch_password)
{
	echo"log in sucessfull....";
	$_SESSION["parent_username"]= $parent_username;
	header("location:parents_wlcm.php");
}

else
 {
  if($parent_username=="" || $parent_password=="")
   {
	//header("location:index.php?wrong user");
	 echo "Please fill up the box";
	}
  else
	{
	  echo "Wrong User!!!";
	 } 
  } */
}

?>
<?php
include("connection.php");
?>
<html>
<head>
<title>Log In</title>
</head>
<body>
<form method="">
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
  <td><input type="submit" name="submit" value="Log In" style= "width:100px; height:50px; border-radius:10px;" > </td>
 </tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])
{
	if
}
?>
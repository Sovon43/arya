<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="school";
/* $link=mysqli_connect($servername,$username,$password,$dbname); */
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
 echo "connected";
}
else
{
die("connection failed because".mysqli_connect_error());
}
 ?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="meena";
$conn=new mysqli($servername,$username,$password,'meena');
$username=$_POST["n"];
$email=$_POST["e"];
$pwd=$_POST["p"];
$con_pwd=$_POST["password"];
$phone=$_POST["phone"];

if($conn->connect_error)
 echo "connection failed";
else
  $sql="insert into register(name,email,password,con_password,phone)values('{$username}','{$email}','{$pwd}','{$con_pwd}','{$phone}')";

if($conn->query($sql)===TRUE)
{
 echo "inserted successfully";
   echo "<a href="home.html"> home<a> ";
 
}
else {
echo "error";
}
?>
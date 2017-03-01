<?php
session_start();
$con=mysql_connect('localhost','omkar','omkar');
$flag=mysql_select_db('resume',$con);
if(!$flag) die(mysql_error());
$name=$_POST['name'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];

mysql_query("INSERT INTO uinfo VALUES('','$name','$email_id','$password')");

header("location:hello.html");
mysql_close($con);

?>
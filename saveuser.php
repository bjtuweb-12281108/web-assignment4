<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat");
$id=$_POST['uid'];
$password=$_POST['pwd'];
$name=$_POST['name1'];
$username=$_POST['name2'];
$sex=$_POST['sex'];
$xueyuan=$_POST['xueyuan'];
$grade=$_POST['grade'];
$exe="insert into alluser values('$id','$password','$name','$username','$sex','$xueyuan','$grade')";
$result=mysql_query($exe);
mysql_close($con);
	header("location:index.php");
?>

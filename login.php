<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);
@$ID = $_POST['uid'];
@$NAME = $_POST['name'];
@$PASSWORD = $_POST['password']; 
$result = mysql_query("SELECT * FROM alluser where id='$ID' and password='$PASSWORD' and username='$NAME'");
$n = 0;
if($row == mysql_fetch_array($result)){	  
    header("location:find.php");
	$n = 1;	
}
elseif($n == 0){
	header("location:index.php");
	}
mysql_close($con);
?>
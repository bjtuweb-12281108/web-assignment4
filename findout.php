<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("chat", $con);
$ID = $_POST['userid'];
$USERNAME = $_POST['name1'];
$NAME = $_POST['name2'];

$result = mysql_query("SELECT * FROM alluser");
echo "<table border='1'>
<tr>
<th>账号</th>
<th>昵称</th>
<th>真实姓名</th>
<th>性别</th>
<th>学院</th>
<th>年级</th>
</tr>";

while($row = mysql_fetch_array($result)){
	if($row['id'] == $ID){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['sex'] . "</td>";
		echo "<td>" . $row['xueyuan'] . "</td>";
		echo "<td>" . $row['grade'] . "</td>";
		echo "</tr>";
	}
	elseif($row['username'] == $USERNAME){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['sex'] . "</td>";
		echo "<td>" . $row['xueyuan'] . "</td>";
		echo "<td>" . $row['grade'] . "</td>";
		echo "</tr>";
	}
	elseif($row['name'] == $NAME){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['sex'] . "</td>";
		echo "<td>" . $row['xueyuan'] . "</td>";
		echo "<td>" . $row['grade'] . "</td>";
		echo "</tr>";
	}
}
echo "</table>";
mysql_close($con);
?>
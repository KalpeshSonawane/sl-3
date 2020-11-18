<html>
<body>
<div style="border:1px solid black; background:#FF9966;" align="right"><form action="log3.php" method="get">
<input type="submit" value="logout"/>
</form></div>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('coluld not connect'.mysql_error());
}
else
{
/*echo "Connect";*/
}
mysql_select_db("kiso",$con);
$result=mysql_query("select * from login");
echo "Detail About all Users";
echo "<br>";
echo "<br>";
echo "<table border='1' cellpadding='14'>
<tr>
<th>username</th>
<th>Department</th>
<th>city</th>
<th>mobile</th>
</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
  echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['dept'] . "</td>";
	  echo "<td>" . $row['city'] . "</td>";
	  echo "<td>" . $row['mobile'] . "</td>";
  echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
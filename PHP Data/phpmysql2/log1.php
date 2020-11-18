<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
// store session data
$_SESSION['views']=1;
?>
<html>
<body style="border:1px solid black;width:967px;margin:0px auto;background:#33FF99">

<?php

//echo $_GET['username'];
//echo $_GET['password'];

$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
// echo "Connect with database Sucusefully";
}
mysql_select_db("kkw",$con);
$result = mysql_query("SELECT * FROM login where userid='".mysql_real_escape_string($_GET['uid'])."'");
echo "<table border='1' align='center' cellpadding='12' >
<caption width='50%'><b> Welcome to ".$_GET['uid']." <b></caption>
<br>
<tr>
<th>username</th>
<th>Department</th>
<th>City</th>
<th>Mobile</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  if($_GET['uid']== $row['userid'])
  {
  echo "<tr>";
  echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['dept'] . "</td>";
	  echo "<td>" . $row['city'] . "</td>";
	  echo "<td>" . $row['mobile'] . "</td>";
  echo "</tr>";
  echo "</table>";
  include("log2.php");
}
//fopen("wel.php","r");  
 else
{
die('Could not connect: ' . mysql_error());
}
//   echo $row['username'] . " " . $row['password'];
  echo "<br />";
mysql_close($con);
  }

?>
</body>
</html>

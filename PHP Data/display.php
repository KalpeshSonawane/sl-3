<?php
session_start();
// store session data
$_SESSION['views']=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect'.mysql_error());
}
else 
{
echo ("Connect Sucuseefully");
}
mysql_select_db("kiso",$con);
$result = mysql_query("SELECT * FROM addbook");
echo "<table border='1' hspace='12' align='center' cellpadding='15' cellspacing='10'>
<caption>Address Details</caption>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Permanant Address</th>
<th>temp Address</th>
<th></th>
<th></th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['per'] . "</td>";
  echo "<td>" . $row['temp'] . "</td>";
  echo "<td> <a href='display.php?edit=" . $row['id'] . "'>edit</a></td>";
    echo "<td> <a href='display.php?del=" . $row['id'] . "'>delete</a></td>";
  echo "</tr>";
  }
echo "</table>";
?>
<?php
/*echo $_POST['edit'];*/
if($_GET['edit']!="")
{
 $sql=mysql_query ("SELECT * from addbook WHERE id = '".mysql_real_escape_string($_GET['edit'])."'");
echo "<form action='display.php'method='POST'> <table border='1' hspace='12' align='center' cellpadding='15' cellspacing='10'>
<caption>Address Details</caption>
<tr>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Permanant Address</th>
<th>temp Address</th>
</tr>";
while($row=mysql_fetch_array($sql))
  {
  echo "<tr>";
  echo "<td><input type='text' name='iname' value='".$row['name']."'></td>";
    echo "<td><input type='text' name='mobile' value='".$row['mobile']."'></td>";
	echo "<td><input type='text' name='email' value='".$row['email']."'></td>";
    echo "<td><input type='text' name='permanant' value='".$row['per']."'></td>";
    echo "<td><input type='text' name='temp' value='".$row['temp']."'></td>";
	echo "<td><input type='hidden' name='sid' value='".$row['id']."'></td>";
    echo "</tr>";
	  echo "<tr>";
	    echo "<td>";
		echo "<input type='submit'>";
		  echo "<td>";
	    echo "</tr>";
  }
echo "</table>";

echo "</form>";
 }
 ?>
 <?php
 if($_POST['sid'] != "")
 {
$cn=mysql_query("Update addbook set id='".mysql_real_escape_string($_POST['sid'])."',name='".mysql_real_escape_string($_POST['iname'])."',mobile='".mysql_real_escape_string($_POST['mobile'])."',email='".mysql_real_escape_string($_POST['email'])."',per='".mysql_real_escape_string($_POST['permanant'])."',temp='".mysql_real_escape_string($_POST['temp'])."' WHERE id='".mysql_real_escape_string($_POST['sid'])."'");
}
if(!cn)
{
die("Unable to update products ".mysql_error());
}
else
{
echo "Sucusefully Updated";
}
 if($_GET['del']!="")
{
  $sql = "DELETE FROM addbook WHERE id = '".mysql_real_escape_string($_GET['del'])."'";
  $rs  =mysql_query($sql) or die("Unamble to delete records " . mysql_error());
  if(!sql)
  {
  die("Unamble to delete records " . mysql_error());
 }   
 else
 {
 echo "Deleted";
  }
 }
 ?>
<div><a href="address.php"> <b>Insert Data</b></a></div>
<table cellpadding="14"></table>
</body>
</html>

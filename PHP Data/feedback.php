<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form action="feedback.php" method="POST">
<h1> Feedback Form</h1>
First Name <input type="value" name="firstname" /><br>
Last Name <input type="value" name="lastname"  /><br>
Address <input type="Text" name="add" /><br>
Email  <input type="value" name="email" /><br>
Comments <input type="text" name="comment" /><br>
Mobile Number <input type="value" name="mobile"  /><br>
<input type="submit"  />
</form>
<?php
$con=mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect' .mysql_error());
}
/*else
{
echo "connect Sucuseefully";
}*/
mysql_select_db("kiso",$con);
mysql_query("insert into feedback(first,last,address,email,comments,mobile)VALUES('".mysql_real_escape_string($_POST['firstname'])."','".mysql_real_escape_string($_POST['lastname'])."','".mysql_real_escape_string($_POST['add'])."','".mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($_POST['comment'])."','".mysql_real_escape_string($_POST['mobile'])."')");
/*if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
else
{
echo "connect Sucuseefully";
}*/
$result


=mysql_query("SELECT * from feedback");
echo "<table border='1' hspace='12' align='center' cellpadding='15' cellspacing='10'>
<caption>Address Details</caption>
<tr>
<th>id</th>
<th>First</th>
<th>Last </th>
<th>Address</th>
<th>Email</th>
<th>Comments</th>
<th>mobile</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['first'] . "</td>";
  echo "<td>" . $row['last'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['comments'] . "</td>";
echo "<td>" . $row['mobbile'] . "</td>";
  
echo "</tr>";
  }
echo "</table>";

?>
</body>
</html>

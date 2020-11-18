<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<body>
<title>Untitled Document</title>
<form action="address.php" method="post">
<table>
<caption align="top"> Address Books of Students</caption>
<tr>
<th>First Name</th>
<td><input type="value" name="firstname" /><td>
</tr>
<tr>
<th>Mobile Number</th>
<td><input type="value" name="mobile" /><td>
</tr>
<tr>
<th>Email Address</th>
<td><input type="value" name="email" size="50" /><td>
</tr>
<tr>
<th>Per_Address</th>
<td ><input type="text" name="per"  width="50" vspace="10" height="100" size="60" /><td>
</tr>
<tr>
<th>Temporory Address</th>
<td><input type="text"  name="temp" size="60" /><td>
</tr>
<tr>
<th></th>
<td><input type="submit"  /><td>
</tr>
</table>
</form>

<?php                                                               
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect'.mysql_error());
}
else 
{
/*echo ("Connect Sucuseefully");*/
}
$cn=mysql_select_db("kiso",$con);
$sql=mysql_query("insert into addbook(name,mobile,email,per,temp)values('".mysql_real_escape_string($_POST['firstname'])."','".mysql_real_escape_string($_POST['mobile'])."','".mysql_real_escape_string($_POST['email'])."','".mysql_real_escape_string($_POST['per'])."','".mysql_real_escape_string($_POST['temp'])."')");
if(!$sql)
  {
  die('Error:'.mysql_error());
  }
  else
  {
  echo "Record Inseted";
  }

?>
<div><a href="display.php">View Detials</a></div>
</body>
</html>

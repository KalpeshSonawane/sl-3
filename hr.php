<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
date_default_timezone_set("Asia/Calcutta");
$hrs=date("h");
echo "<centet>Hours:$hrs</center>";
if($hrs>=0 and $hrs<=1)
{
$bgcolor='blue';
}
else if($hrs>=2 and $hrs<=3)
{
$bgcolor="orange";
}
else if($hrs>=4 and $hrs<=5)
{
$bgcolor="red";
}
else if($hrs>=6 and $hrs<=7)
{
$bgcolor="pink";
}
else if($hrs>=8 and $hrs<=9)
{
$bgcolor="green";
}
else if($hrs>=10 and $hrs<=11)
{
$bgcolor="yellow";
}
else if($hrs==12)
{
$bgcolor="brown";
}
 echo"<body bgcolor=".$bgcolor.">\n";
?>
</body>
</html>

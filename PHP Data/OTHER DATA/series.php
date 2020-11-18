<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form action="series.php" method="post">
Enter the range of Fibonacci series :<input text='text' name='r' value='<?php $r=$_POST['r'];echo $r;?>'>
<?php
//echo $_POST['r'];
?>
<input type= 'submit' name='ok' value='OK'>
</form>
<?php
if($_POST['ok']=='OK')
{
$r=$_POST['r'];
$i=0;$j=1;
echo "$i,$j,";
for($k=1;$k<=$r-1;$k++)
{
 $f=$i+$j;
 $i=$j;
 $j=$f;
 echo "$f,";
}
$f=$i+$j;
 $i=$j;
 $j=$f;
 echo "$f.";
}
?>
</body>
</html>

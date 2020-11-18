<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="karan.css" type="text/css">
</head>
<body>
<div class="xyz">Calculator
</div>
<div class="cal">
<form action="calci.php" method="post">
<table border="1px" align="center" width="400px" bgcolor="#CCFFCC" cellpadding="20px">
<tr>
<td>No1</td>
<td><input type="text" name="no1" value="<?php $no1=$_POST['no1']; echo $no1;?>"></td>
</tr>
<tr>
<td>No2</td>
<td><input type="text" name="no2" value="<?php $no2=$_POST['no2']; echo $no2;?>"></td>
</tr>
<tr>
<td>Operation</td>
<td>
<?php 
echo '<select name="operation">';
if(!empty($_POST['operation']))
{
	switch($_POST['operation'])
	{
		case 'Add':
		{
		echo '<option>Menu</option>';
		echo '<option value="Add" selected>Addition</option>';
		echo '<option value="Sub">Subtraction</option>';
		break;
		}
    	case 'Sub':
		{
		echo '<option>Menu</option>';
		echo '<option value="Add">Addition</option>';
		echo '<option value="Sub">Subtraction</option>';
		break;
		}

		default:
		{
		echo "<option>Menu</option>";
		echo "<option value='Add'>Addition</option>";
		echo "<option value='Sub'>Subtraction</option>";
		}
    }
}
else
{
	echo '<option>Menu</option>';
	echo '<option value="Add">Addition</option>';
	echo '<option value="Sub">Subtraction</option>';
}
echo '</select>';
?>

</td>
</tr>
<tr>
<td><input type="submit" name="calc" value="CALCULATE"></td>
<td><?php

$no1=$_POST['no1'];
$no2=$_POST['no2'];




		 else if($_POST['operation']=='Sub')
		{
			$no3 = $no1 - $no2;
			echo "<tr><td>Subtraction:</td>
				<td><input type='text' name='ans' value='$no1-$no2=$no3'></td>";
				echo "</table>";
		}
	}
	?>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

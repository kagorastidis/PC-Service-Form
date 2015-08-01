<?php
$con = mysql_connect("localhost","root","");
 $db = mysql_select_db("service_db",$con);
 mysql_query("SET NAMES 'utf8'");
 $get=mysql_query("SELECT pelatis FROM service_tb ORDER BY id DESC");
 
$option = '';
 while($row = mysql_fetch_assoc($get))
{
  $option .= '<option  value = "'.$row['pelatis'].'">'.$row['pelatis'].'</option>';
}

?>

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body style="background:#222222;">

<form method="post" action="final.php">
<table align = "center" style="width:75%; margin-top:65px; border:1px solid black; ">

<tr>
  <th>Customer</th>		
  <th>Technician Name</th>
  <th>Price</th>


  
</tr>

<tr>
  
  <td align="center"><select name = "pelatis"><?php echo $option; ?></select></td>
  <td align="center"><INPUT maxLength=75 id="texnikos" name="texnikos" required></td>
  <td align="center"><INPUT maxLength=75 id="kostos" name="kostos" required></td>
  
</tr>
</table>
<center><input type="submit" name="submit" value="Update" id="btn"></center>
</form>

</body>
</html>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<body style="background:#222;">


<?php



$database="service_db";
mysql_connect ("localhost", "root", "");
mysql_query("SET NAMES 'utf8'");
@mysql_select_db($database) or die( "Unable to select database");


$result = mysql_query( "SELECT  * FROM service_tb order by id DESC;")
or die("SELECT Error: ".mysql_error());


$num_rows = mysql_num_rows($result);
//print "Βρέθηκαν $num_rows αποτελέσματα.";
print "<table>";
print "<tr><th>Id</th><th>Item</th><th>Customer Name</th><th>Customer phone</th><th>Damage Description</th><th>Σχόλια</th><th>Date(Start)</th><th>Date(End)</th><th>Technician Name</th><th>Price</th></tr>";
while ($get_info = mysql_fetch_row($result)){
print "<tr>\n";
foreach ($get_info as $field)
print "\t<td></>$field</td>\n";
print "</tr>\n";
}
print "</table>\n";
print"</div";


?>

</body>
</html>
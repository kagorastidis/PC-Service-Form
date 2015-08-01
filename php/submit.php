<html> 
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body style="background:#222222;">
 <center><h1>Items Submited succesfully!</h1></center><br>
<?php
//header('Content-type: text/plain; charset=utf-8');
$date = date("d-m-Y");
$database="service_db";
mysql_connect ("localhost", "root", "");
mysql_query("SET NAMES 'utf8'");
@mysql_select_db($database) or die( "Unable to select database");

$eidos   = $_POST["eidos"];
$pelatis = $_POST["customer"];
$phone   = $_POST["phone"];
$vlavi   = $_POST["vlavi"];
$sxolia  = $_POST["sxolia"];


$query = "INSERT INTO service_tb (eidos,pelatis,phone,perigrafi,sxolia,paralavi,paradosi,texnikos) values ('$eidos','$pelatis','$phone','$vlavi','$sxolia','$date','Pending','Not Assigned yet')";
//$query = "INSERT INTO service_tb (eidos,pelatis,phone,perigrafi,sxolia ) values ('laptop','τασος','12342','δεν ανοιγει','τσαντα')";

$submit = mysql_query($query);

print "<table align='center' style='margin-top=45px;'><tr><th>Item</th><th>Customer Name</th><th>Customer Phone</th><th>Damage Description</th><th>Comments</th></tr><tr><td align='center'>".$eidos."</td><td align='center'>".$pelatis."</td><td align='center'>".$phone."</td><td align='center'>".$vlavi."</td><td align='center'>".$sxolia."</td></tr></table>";

?>
<center><button onclick="myFunction()"id="btn">Print</button><center>
<br><br><hr>
<p id ="demo"style="text-align:center;color:#ffffff;font-style:italic;"></p>
 <script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
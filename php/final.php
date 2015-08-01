<html> 
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body style="background:#222222;">
 <center><h1>Items Submited succesfully!</h1></center><br>
<?php
//header('Content-type: text/plain; charset=utf-8');
$database="service_db";
mysql_connect ("localhost", "root", "");
mysql_query("SET NAMES 'utf8'");
@mysql_select_db($database) or die( "Unable to select database");


$pelatis = $_POST['pelatis'];
$texnikos   = (string) $_POST['texnikos'];
$kostos   = $_POST['kostos'];
$date = date("d-m-Y");


$query = "update service_tb set kostos = $kostos ,  texnikos = '$texnikos' , paradosi= '$date'  WHERE pelatis ='$pelatis'";
$submit = mysql_query($query);

print "<table align='center' style='margin-top=45px;'><tr><th>Customer</th><th>Technician Name</th><th>Price Charged</th><tr><td align='center'>".$pelatis."</td><td align='center'>".$texnikos."</td><td align='center'>".$kostos."</td></tr></table>";
?>
<center><button onclick="myFunction()"id="btn">Print form</button><center>
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
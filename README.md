# PC-Service-Form

This a php-html system I made (for educational purposes) that simulates a service department managment system.
You can: 

-add New items that need to be fixed
-Update the status when the technician fixed them
-search for the items status
-Add Repair price , to charge the customer for every item
-Assign Items to Seperate Technicians, to see who fixed what
-Track Dates (When each item arrived - When it was repaired)

----How To Install---

You need a webserver with PHP

-First Copy all the files except Database folder to your public directory
-Go to phpMyAdmin and create a database named "service_db" 
-import "service_db.sql"

You can change User, Database Name etc by altering the .php files (optional but recommented)
 $con = mysql_connect("localhost","root","");
 $db = mysql_select_db("service_db",$con);
 
 

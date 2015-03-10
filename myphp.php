<html>
  

<?php

// Create connection
$link = mysql_connect("localhost", "root", "") or die (mysql_error());

echo
   "Connected
    successfully
    <br>";
    
//sql_query("CREATE DATABASE IF NOT EXISTS <mydatabase>");

mysql_select_db("mydatabase") or die(mysql_error());

mysql_query("CREATE TABLE IF NOT EXISTS <MyTable>  (Name CHAR, Email CHAR))");
   ?>
<br>
  
 Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
   $strSQL = "INSERT INTO MyTable(Name,Email) values('" . $_POST["name"] . "','". $_POST["email"] . "')";
   mysql_query($strSQL) or die (mysql_error());
   ?>
<br>

<?php
  // $strSQL = "SELECT * FROM mydatabase"; //already selected
   
   // Execute the query (the recordset $rs contains the result)
   $rs = mysql_query($strSQL) or die (mysql_error());

   mysql> SELECT * FROM pet;
   // Loop the recordset $rs
   // Each row will be made into an array ($row) using mysql_fetch_array
   /*
   while($row = mysql_fetch_array($rs)) {

       // Write the value of the column FirstName (which is now in the array $row)
       echo $row['name'] . " " . $row['email'] . "<br />";

	  }
*/
   ?>



<?php
   mysql_close();
   ?>
</html>


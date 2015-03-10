<?php
   $dbname="email_app";
   $dbuser="email_admin";
   $dbpass="password123";
   $dbhost="localhost";

   $dbc=mysqli_connect($dbhost, $dbuser,$dbpass, $dbname)
   or die(mysqli_error($dbc));
   ?>

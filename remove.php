<?php
   //initialize variables from form
   $email = $_POST['email'];

   
   //print to screen;
   echo $email . "<br/>";


   //open connection to database
   include("connect.php");


   //delete record from mailinglist table
   $query = "DELETE FROM mailinglist WHERE (email = '$email')";


   //query the db
   $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));


   //test success
   if($result==1){
     echo "<br/>You have been removed from my spam sender!" . $email . "has been removed." ;
   }else{
     echo "<br/>An error has occured. :(";
   }

   //close connection
   mysqli_close($dbc);

   ?>

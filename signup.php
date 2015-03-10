<?php
   //initialize variables from form
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name']
   $email = $_POST['email'];

   
   //print to screen
   echo "<p>You entered: </p>";
   echo $first_name . "<br/>";
   echo $last_name . "<br/>";
   echo $email . "<br/>";


   //open connection to database
   include("connect.php");


   //write tsql and save in variable
   $query = "INSERT INTO mailinglist (id, first_name, last_name, email) " .
            "VALUE (NULL, '$first_name', '$last_name', '$email')";


   //query the db
   $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));


   //test success
   if($result==1){
     echo "<br/>You have been added to the mailing list!! Get ready for some spam!!!";
   }else{
     echo "<br/>An error has occured. :(";
   }

   //close connection
   mysqli_close($dbc);

   ?>

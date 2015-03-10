<?php
   //hardcode admin email
   $from ="oliver_walker@student.uml.edu"


   //store form values
   $subject=$_POST['subject'];
   $body=$_POST['body'];

   //feedback
   echo "From: " . $from . "<br/>";
   echo "Subject: " . $subject . "<hr/>";

   //open connection
   include(connect.php);

   //compose the tsql
   $query = "SELECT first_name, last_name, email FROM mailinglist";

   //run query and stor results
   $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));

   while($row = mysqli_fetch_array($result)){
   $first_name = $row['first_name'];
   $last_name = $row['last_name'];
   $to = $row['email'];

   $msg = "Dear" . $first_name . " " . $last_name . ",<br/>" .$body;
   mail($to, $subject, $msg, 'From: ' . $from);
   

   //feedback
   echo "Mail sent to: " . $to . "<br/>";

   } //end of while loop

   echo $msg . "<hr/>";
                                  

   //simple confirmation
   if(count($result)>0){
     echo "<br/>You have sent the message!";
   }else{
     echo "<br/>something went wrong."
   }

   //close connection
   mysqli_close($dbc);
?>

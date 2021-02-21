<?php

 if(isset($_POST['Submit']))
{
 $name= $_POST['name'];
 $email= $_POST['email'];
 $address= $_POST['address'];
 $phone= $_POST['Phone-no'];
 $reason= $_POST['Reason'];
}
$servername = "localhost";

   $username = "root";

   $password = "";

   $dbname = "registration";

  

   $connection = mysqli_connect($servername, $username, $password, $dbname);

  

   if (!$connection) {

     echo "submit failed ";

   } else {

     echo "submit Successfully done <br>";

   }

?>


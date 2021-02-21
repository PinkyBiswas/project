<?php
if(isset($_POST['Submit']))
{
  $name= $_POST["name"];
  $email= $_POST["email"];
   $address= $_POST["Address"];
  $contact=  $_POST["Contact"];
  $dob= $_POST["DOB"];
  $nid= $_POST["NID"];
  $gender= $_POST["gender"];

 
 
}

  $servername = "localhost";

   $username = "root";

   $password = "";

   $dbname = "registration";

  

   $connection = mysqli_connect($servername, $username, $password, $dbname);

  

   if (!$connection) {

     echo "regiatration failed ";

   } else {

     echo "registration Successfully <br>";

   }


?>

 
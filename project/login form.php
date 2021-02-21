<?php

if(isset($_POST['Submit']))
{
  $name= $_POST["name"];
  $email= $_POST["email"];
 
 
}
$servername = "localhost";

   $username = "root";

   $password = "";

   $dbname = "registration";

  

   $connection = mysqli_connect($servername, $username, $password, $dbname);

  

   if (!$connection) {

     echo "login failed ";

   } else {

     echo "login Successfully <br>";

   }

?>
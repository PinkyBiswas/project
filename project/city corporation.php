<?php

 if(isset($_POST['Submit']))
{
 $city= $_POST['corporation'];

 
 
}
$servername = "localhost";

   $username = "root";

   $password = "";

   $dbname = "registration";

  

   $connection = mysqli_connect($servername, $username, $password, $dbname);

  

   if (!$connection) {

     echo "vote failed ";

   } else {

     echo "vote Successfully done <br>";

   }

?>
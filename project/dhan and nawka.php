<?php
if(isset($_POST['Submit']))
{
  $name= $_POST["parliament1"];
  $email= $_POST["parliament2"];
 
 
}
$servername = "localhost";

   $username = "root";

   $password = "";

   $dbname = "registration";

  

   $connection = mysqli_connect($servername, $username, $password, $dbname);

  

   if (!$connection) {

     echo "vote failed ";

   } else {

     echo "vote Successfully Done <br>";

   }
   

?>

   

<?php
  session_start();

  $file = fopen("data.txt", 'w');

  // fwrite($file,"Name: "$_SESSION['name']."\n");
  // fwrite($file,"Email: "$_SESSION['email']."\n");

  fwrite($file,"Name: pinky biswas,"."\n");
  fwrite($file, "email: pinky.biswas@northsouth.edu"."\n");

 
  echo "Stored in file successfully";
  fclose($file);


 
 



 ?>
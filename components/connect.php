<?php

   $db_name = 'mysql:host=localhost;dbname=online_edu_project';
   // $db_name = 'mysql:host=localhost:8080;dbname=online_edu_project';
   $user_name = 'root';
   $user_password = '';

   $conn = new PDO($db_name, $user_name, $user_password);
   // $conn = mysqli_connect('localhost', 'nansi', 'user1234','online_edu_project');

   if(!$conn){
      echo '**Connection Error' . mysqli_connect_error();
  }
   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
         $n = mt_rand(0, $length);
         $rand[] = $str[$n];
      }
      return implode($rand);
   }

   

?>
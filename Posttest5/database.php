<?php 
   $hostname = "localhost";
   $user = "root";
   $password = "";
   $database_name = "064Posttest5";

   $conn = mysqli_connect($hostname,$user,$password,$database_name);

   if(!$conn) {
      die("gagal terhubung ke database". mysqli_connect_error());
   }
?>
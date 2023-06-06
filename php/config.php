<?php
  $hostname = "sql210.infinityfree.com";
  $username = "epiz_33677165";
  $password = "bo8xooITAyw";
  $dbname = "epiz_33677165_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

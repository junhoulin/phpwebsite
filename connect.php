<?php
  $host = 'localhost';
  $port = '85';
  $dbuser ='root';
  $dbpassword = '12345678';
  $dbname = 'junhoudb';
  $link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

  if(!$link){
    echo "cannot connect to the database";
    exit;
  }
?>


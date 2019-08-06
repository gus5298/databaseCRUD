<?php

$servername = $_ENV['hostname'];
$username = $_ENV['username'];
$password = $_ENV['password'];



  //Create connection
  $conn = mssql_connect($servername, $username, $password);
    if (!$connection) {  die('Not connected : ' . mssql_get_last_message());}else {
      echo '<script>console.log("Your stuff here")</script>';
    }



// $hostname = 'localhost';
// $username = 'b6025590';
// $password = 'gus1998';
// $database = 'b6025590_db1';
//  $conn =  new mysqli($hostname, $username, $password, $database);


  // //Check connection
  // if (mysqli_connect_errno()) {
  //   //Connection failed
  //   echo 'Failed to connect to MySQL '. mysqli_connect_errno();
  // }
// $hostname = 'localhost';
// $username = 'b6025590';
// $password = 'gus1998';
// $database = 'b6025590_db1';
//  $conn =  new mysqli($hostname, $username, $password, $database);


  //Check connection
  if (mysqli_connect_errno()) {
    //Connection failed
    echo 'Failed to connect to MySQL '. mysqli_connect_errno();
  }
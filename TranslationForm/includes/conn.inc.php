<?php
  //Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'monitoring');

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
<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "olympics";

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  function executeQuery($query){
      global $conn; 
      return $conn->query($query); 
  }
?>
<?php

  $conn = mysqli_connect("localhost", "root", "", "employee");

  if($conn->connect_error)
  {
    echo "Connection failed";
  }
 

?>
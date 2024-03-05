<style>  body {
    background-image: linear-gradient(45deg, white, skyblue);
  }</style>

<?php

  include("conn.php");

  $data = mysqli_query($conn, "SELECT Name,Age,City FROM etab");

  while($row = mysqli_fetch_array($data))
  {
    echo "<br>";  
    echo $row['Name']."<br>";
    echo $row['Age']."<br>";
    echo $row['City']."<br>";
  }

?>

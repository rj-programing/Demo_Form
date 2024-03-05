<style>

  body {
    background-image: linear-gradient(45deg, white, skyblue);
  }

  .fname {
    border-right: none;
    border-left: none;
    border-top: none;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    font-size: 16px;
    outline: none;
    font-weight: bold;
    height: 40px;
    width: 15%;
    border-radius: 30px;
    text-align: center;
  }

  .btn {
    color: black;
    background-color: white;
    height: 30px;
    width: 100px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
    font-weight: bold;
    margin-top: 30px;
    transition: 0.3s;
    cursor: pointer;
  }

  .btn:hover {
    color: white;
    background-color: black;
    transition: 0.3s;
    height: 40px;
    width: 110px;
  } 

</style>
<body>
  

<center>
<form method="GET">

   <input type="text" name="name" class="fname" placeholder="Enter Name"><br>
   <input type="text" name="age" class="fname" placeholder="Enter Age"><br>
   <input type="text" name="city" class="fname" placeholder="Enter City:"><br>

  <input type="submit" value="submit" name="sub" class="btn">
  <br>
  <input type="reset" class="btn">

</form>
</center>
</body>
<?php

 include("conn.php");

 

 if(isset($_GET['sub']))
 {

  $nm = $_GET['name'];
 $ag = $_GET['age'];
 $ct = $_GET['city'];

  $sql = "INSERT INTO etab VALUES ('$nm', '$ag', '$ct')";


  if($conn->query($sql)==True)
  {
    echo "Data Inserted";
  }
  else
  {
    echo "Try again";
  }

  header("Location: list.php  ");

 }


?>
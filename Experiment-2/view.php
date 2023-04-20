<?php
session_start();?>
    <?php
    if(isset($_SESSION['t1'])){
      
    }
    else{
        header('Location:face.php');
    }
    ?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #3b5998;
  color: #fff;
  padding: 35px;
}

nav ul {
  list-style: none;
  margin: 0;
  float:right;
  font-size: 120%;
}

nav li {
  display: inline-block;
  margin-right: 14px;
}

nav a {
  color: #fff;
}  
input[type="submit"]
{
    background-color:white;
    width: 130%;
    height:3%;
}    
</style>
  </head>
  <body>
    <header>
      <h1>Facebook</h1>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="prof.php">Profile</a></li>
          <li><a href="phot.php">Upload Photos</a></li>
          <li><a href="friends.php">Friends</a></li>
          <li><form action="logout.php" method="post">
          <input type="submit" value="logout">
</form></li>
        </ul>
      </nav>
    </header>
     <a href="upload.php">&#8592;</a>
     <?php 
      $sname = "localhost";
      $uname = "root";
      $password = "";

      $db_name = "adarsh";
      $hi=$_SESSION['t1'];
$conn = mysqli_connect($sname, $uname, $password, $db_name);
          $sql = "SELECT * FROM images1 where user='$hi'";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             	<img src="uploads/<?=$images['image_url']?>" height="280px" width="280px">
      
          		
    <?php } }?>
</body>
</html>

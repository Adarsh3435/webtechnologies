<?php
session_start();?>
    <?php
    if(isset($_SESSION['t1'])){
      
    }
    else{
        header('Location:face.php');
    }
    $x=$_SESSION['t1'];
    $sname = "localhost";
      $uname = "root";
      $password = "";

      $db_name = "adarsh";
      $hi=$_SESSION['t1'];
$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (isset($_POST['photo'])) {
    $image_id = $_POST['photo'];

    $username = $_SESSION["t1"];
    $sql = "UPDATE images1 SET likes = likes + 1 WHERE image_url = '$image_id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
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
h2{
  text-align: center;
  color:#3b5998;
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
  margin-right: 16px;
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
.alb{
  text-align: center;
}
.left{
  position: fixed;
  right:20%;
  background-color: #3b5998;
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
         <li> <form action="logout.php" method="post">
          <input type="submit" value="logout">
</form></li>
        </ul>
      </nav>
    </header>
    <h2 >Welcome to <?php echo "$x"?>
     <?php 
      $sname = "localhost";
      $uname = "root";
      $password = "";

      $db_name = "adarsh";
      $hi=$_SESSION['t1'];
$conn = mysqli_connect($sname, $uname, $password, $db_name);
          $sql = "SELECT * FROM images1 ORDER BY likes desc";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$row['image_url']?>" height="280px" width="280px">
                 <form action="" method="post">
                  <input type="hidden" name="photo" value="<?php echo $row['image_url']; ?>">
                  <button type="submit" class="lb">Likes <?php echo $row['likes']; ?></button>
                  <hr>
              </form>
             </div>
<div class="left"></div>
          		
    <?php } }?>
</body>
</html>

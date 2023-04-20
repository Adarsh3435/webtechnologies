<?php
session_start();?>
    <?php
    if(isset($_SESSION['t1'])){
      
    }
    else{
        header('Location:face.php');
    }
    ?>
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
  margin-right: 16px;
}

nav a {
  color: #fff;
}  
.b1
{
    background-color:white;
    width: 100%;
    height:3%;
}  
.b2
{
  background-color:darkgray;
    width: 9%;
    height:5%;
}  
.d1{
  text-align: center;
  padding-top:10%
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
          <input type="submit" class="b1" value="logout">
</form></li>
        </ul>
      </nav>
    </header>
    <div class="d1">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="my_image">
    <input type="submit" name="submit" class="b2" value="Upload">
     	
     </form>
    </div>
</body>
</html>
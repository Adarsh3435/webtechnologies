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
    <?php
    
    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "adarsh";
    
    $conn = mysqli_connect($host, $uname, $password, $dbname);
    $name = $_SESSION['t1'];
    $v = "SELECT * FROM facebook where email='$name';";
    $result = mysqli_query($conn, $v);
    ?>
    <h2 align="center">User Profile</h2>
    <br>
    <br>
    <table border=0 align="center" cellpadding=25 cellspacing=25>
        <tr>
            <th>FirstName</th>
            <th>Surname</th>
            <th>email</th>
            <th>dateofbirth</th>
            <th>gender</th>
        </tr>
        <?php
        if ($v) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['dateofbirth'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
            }
        }
    ?>
  </body>
</html>
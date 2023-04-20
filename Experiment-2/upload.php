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
          <input type="submit" class="b1" value="logout">
</form></li>
        </ul>
      </nav>
    </header>
    <?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
        $sname = "localhost";
        $uname = "root";
        $password = "";

        $db_name = "adarsh";
        $ad=$_SESSION["t1"];
$conn = mysqli_connect($sname, $uname, $password, $db_name);

				// Insert into Database
				$sql = "INSERT INTO images1(user,image_url) 
				        VALUES('$ad','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
      }

}else {
	header("Location: phot.php");
}
?>
</form>
</body>
</html>
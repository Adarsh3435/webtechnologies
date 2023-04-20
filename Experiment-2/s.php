<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $name = $_POST["t1"];
    $pwd = $_POST["t2"];


    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "adarsh";
    $conn = mysqli_connect($host, $uname, $password, $dbname);
    if ($conn) {
        echo "Connection successful.";
    } else {
        echo "Connection Failed.";
        die("Connection Failed:" . mysqli_connect_error());
    }
    $sql = "select * from facebook where email='$name' and password='$pwd'";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
        session_start();

        $_SESSION['t1'] = $name;
        header('Location:home.php');
    } else {

        echo "<script> alert('Invalid Credentials')</script>";
        header('Location:signup.html');
    
    }
}

?>
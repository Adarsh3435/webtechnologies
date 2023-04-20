<html>
<body>
    <?php
    $errors = array();
    $name = $_POST["ta1"];
    $surname = $_POST["ta2"];
    $email = $_POST["ta3"];
    $pwd = $_POST["ta4"];
    $dob = $_POST["ta5"];
    $gen = $_POST["ta6"];
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "adarsh";
    $connection = mysqli_connect($host, $uname, $password, $dbname);
    if (isset($connection)) {
        echo "Database connected successfully" . "<br>";
        if ($_POST['ba1']) {
            $query = "insert into facebook(firstname,surname,email,password,dateofbirth,gender)
                values('$name','$surname','$email','$pwd','$dob','$gen')";
            if (mysqli_query($connection, $query)) {
                echo "<script>alert('new person registered')</script>";
            }
        }
    }
    ?>
        <?php
        header("Location: face.php");
        ?>
    </table>
</body>

</html>
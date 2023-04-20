<html>
    <head>
        <title>FACEBOOK</title>
        <style>
            body{
                background-color: aliceblue;
            }
            h1{
                text-align: center;
                font-family:'Gill Sans', 'Gill Sans MT';
                color:rgb(33, 108, 201);
                font-size: 4em;
                font-weight: bold;
                position: fixed;
                left: 40%;
                top:5%;
            }
            #d1
            {
                background-color: white;
                text-align: center;
                margin-left: 58%;
                margin-right: 5%;
                margin-top: 20%;
                padding-top: 3%; 
                padding-bottom: 4%;
            }
            
            h3{
                margin-bottom: 4%;
                font-size: 2em;
                padding-bottom: 2%;
            }
            #t1,#t2,#t3{
                margin-bottom: 2%;
            }
            input[type=text]
            {
                width: 50%;
                height: 5%;
            }
            input[type=password]
            {
                width: 50%;
                height: 5%;
            }
            input[type=submit]
            {
                width: 50%;
                height: 5%;
                background-color:rgb(56, 86, 206);
                font-size: 120%;
                color:white;
            }
        </style>
    </head>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adarsh";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT *
            FROM images1
            ORDER BY likes DESC
            LIMIT 3";
    $result = mysqli_query($conn, $sql);
    echo '<table border=0 style="float:left;margin-top:0%;width:50%;">';
    echo '<tr><th>Username</th><th>Image</th><th>Likes</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td align="center">' . htmlspecialchars($row['user']) . '</td>';
        echo '<td align="center"><img style="width:150px;height:150px;"src="uploads/' . htmlspecialchars($row['image_url']) . '"></td>';
        echo '<td align="center">' . htmlspecialchars($row['likes']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_close($conn);
  ?>
    
        <h1>facebook</h1>
        <div id="d1">
            <br>
            <h3>Login to facebook</h3>
            <form action="s.php" method="POST">
                <input type="text" id="t1" name="t1" placeholder="Email address or phone number">
                <br>
                <input type="password" id="t2" name="t2" placeholder="password">
                <br>
                <input type="submit" id="b1" name="b1" value="Log in"> 
                <br>
                <br>
                <a href="signup.html">New user? Sign up</a>
            </form>
        </div>
    </body>
</html>
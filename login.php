<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost', 'root', '', 'registration');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "SELECT Password FROM students WHERE name='$name'";
        $result = $conn->query($q1);
        
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['Password'] === $password){

                echo "<script> location.href='design.html'</script>";
            }
            else{
                echo "<script> location.href='loginpage.php'</script>";
            }
        }
        else{
            echo 'Invalid Login Credentials : '.', '.$conn->error;
        }
        $conn->close();
        ?>
    </body>
</html>

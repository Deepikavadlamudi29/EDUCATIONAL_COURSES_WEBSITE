<html>
    <head>
        <title>connect</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobilenumber = $_POST['mobilenumber'];
        $password = $_POST['password'];
        $graduation = $_POST['graduation'];


        $conn = new mysqli('localhost', 'root', '', 'registration');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "INSERT INTO 
        students
         VALUES (
            '$name',  
            '$email',
            '$mobilenumber',
            '$password', 
            '$graduation'
            )";

        if($conn->query($q1)===TRUE){
            echo 'Data inserted';
        }
        else{
            echo 'Error occured'.$q1.', '.$conn->error;
        }
        $conn->close();
        ?>
    </body>
</html>

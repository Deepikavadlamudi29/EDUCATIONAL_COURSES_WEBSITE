<html>
    <head>
        <title>connect</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $aadhaarno = $_POST['aadhaarno'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $mobilenumber = $_POST['mobilenumber'];

        $conn = new mysqli('localhost', 'root', '', 'registration');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "INSERT INTO 
        customers
         VALUES (
            '$name', 
            '$aadhaarno ', 
            ' $email',
            '$password', 
            '$address',
            '$mobilenumber'
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

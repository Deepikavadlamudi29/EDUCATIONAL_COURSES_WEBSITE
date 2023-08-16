<html>
    <head>
        <title>connect1</title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $phnumber = $_POST['phnumber'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $items = $_POST['items'];
        $qitems = $_POST['qitems'];
        $paid = $_POST['paid'];

        $conn = new mysqli('localhost', 'root', '', 'registration');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $q1 = "INSERT INTO 
        orders
         VALUES (
            '$name', 
            '$phnumber ', 
            ' $email',
            '$address', 
            '$items',
            '$qitems',
            '$paid'
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

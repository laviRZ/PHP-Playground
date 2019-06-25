<?php
    error_reporting(0);

    if($userName == null) $userName = "Guest";

    include_once("db_login.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $username = $_POST['password'];


    $sql = "INSERT INTO MyGuests (username, email, password)
            VALUES ($username, $email, $password)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

<html>

    <head>
        <title>Message from form</title>

    </head>



    <body>

    </body>

</html>
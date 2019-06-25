<?php
     error_reporting(0);

    if($userName == null) $userName = "Guest";

    include_once("db_login.php");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "") $email = "a";
    $result = $dbc->query("SELECT id FROM users WHERE email = '$email'");

    if($result->num_rows == 0) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($dbc->query($sql) === TRUE) {
            echo "New record created successfully";
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {

        echo "Sorry, but this email is already in-use";
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
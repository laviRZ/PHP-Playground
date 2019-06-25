<?php

    $db_host = "localhost";
    $db_username = "root";
    $db_pass = "laviRZ873096";
    $db_name = "main";

    $dbc = new mysqli("$db_host", "$db_username", "$db_pass", "$db_name") or die ("Error connecting MYSQL <br>");

    echo "Successful connection and load <br>";


?>
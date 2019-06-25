<?php

     error_reporting(0);
    require_once('db_login.php');

    $uid = $_GET['ID'];
    if($uid == ""){
         echo("Error: no request");
         die;    }

    $sql = $dbc->query("SELECT verified FROM users WHERE ID = '$uid'");
            $row = mysqli_fetch_array($sql);
            $ver = $row['verified'];
            if(sizeof($row) < 1) {
                echo("The requested account ID number doesn't exist in our system");
                die;
            }
            if($ver == "0"){
               $result = $dbc->query("UPDATE users SET verified='1' WHERE id=$uid");
               echo("Account verified");
            }else{
                echo("The account is already verified");
            }


?>
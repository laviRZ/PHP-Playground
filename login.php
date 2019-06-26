<?php
    require_once('db_login');

    $username = $_POST['username'];
    $password = hash('sha512', $_POST['password']);

    
?>
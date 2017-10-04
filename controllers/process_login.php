<?php
    session_start();
    include '../models/data.php';
    include '../models/class.accounts.php';
    $user = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $obj = new accounts();
    $obj->processLogin($user, $password);
    echo "<script>window.location.assign('../')</script>";
?>


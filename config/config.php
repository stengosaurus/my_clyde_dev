<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $hn = 'localhost'; //Hostname
    $un = 'my_clyde_admin'; //Username
    $pw = 'ohz.FK)dGml8IT8B'; //Password
    $db = 'my_clyde_dec23'; //Database

    $conn = new mysqli($hn, $un, $pw, $db);

    if ($conn->connect_error) {
        die('connection failed: ' . $db->connect_error);
    };
?>

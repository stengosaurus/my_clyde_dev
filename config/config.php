<?php

$hn = "localhost";
$un = "my_clyde_admin";
$pw = "Q*PLvEH!CKgI_eUt";
$db = "my_clydev1";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error){
    die("connection failed: " . $db->connect_error );
}



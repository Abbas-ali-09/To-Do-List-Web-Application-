<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "to_do_list";

$conn = new mysqli ($servername,$username,$password,$dbname);

if (!$conn) {
    echo "error";
}

?>
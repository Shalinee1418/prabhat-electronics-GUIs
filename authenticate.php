<?php
$credentials = parse_ini_file("env.ini");
$connection = new mysqli($credentials['server'], $credentials['user'], $credentials['password'], $credentials['database']);
if ($connection->connect_error) {
    die("Error occured - " . $connection->error);
}
echo "Aal is well!";
// header("location:dashboard.php");
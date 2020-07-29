<?php

$db = [
    'db_host' => 'localhost',
    'db_user' => 'devrath',
    'db_password' => 'Upes@8776',
    'db_name' => 'cms'

];

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}



$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
    die("db not connected");
}

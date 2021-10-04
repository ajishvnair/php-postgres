<?php
$host = 'localhost';
$port = 5432;
$user = 'postgres';
$password = 'postgres';
try {
    $dbconn = pg_connect("host=" . $host . " port=" . $port . " user=" . $user . " password=" . $password);
} catch (Exception $err) {
    echo $err;
}

function connectToDb($dbName)
{
    try {
        global $host;
        global $port;
        global $user;
        global $password;
        pg_connect("host=" . $host . " dbname=" . $dbName . " port=" . $port . " user=" . $user . " password=" . $password);
    } catch (Exception $err) {
        echo $err;
    }
}

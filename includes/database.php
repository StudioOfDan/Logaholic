<?php //
//
//// De databaseverbinding
//// Zie http://www.php.net/manual/en/book.mysqli.php
//
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//
if ($mysqli->connect_errno) {
   echo "Failed to connect to MySQL:
   (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//
//echo $mysqli->host_info . "<hr>";
// 
//

<?php
// ovako se povezujemo na MySQL server
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "kiwi";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_errno) {
printf("Connection failed!: %s\n", $mysqli->connect_error);
exit();
}
$mysqli->set_charset("utf8");
?>
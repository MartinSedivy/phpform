<?php
$dbhost = "localhost";
$dbUser = "mysqllocal";
$dbPassword = "12345";
$dbName = "db1";


if(!$con = mysqli_connect($dbhost,$dbUser,$dbPassword,$dbName))
{

    die("failed to connect!");
}

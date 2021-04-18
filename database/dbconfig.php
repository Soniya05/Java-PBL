<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$dbname="uploadboi";

$conn=mysqli_connect($host,$user,$password,$dbname);


$domain = $_SERVER['HTTP_HOST'];
$protocol =  $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';

date_default_timezone_set('Asia/kolkata');
$date=date_create(date('Y-m-d'));
$currentDate=date_format($date,"Y-m-d");

?>
<?php
//headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');




include_once('../../config/config.php');
include_once('../../model/post.php');


//intantiate database

$database = new Database();
$db = $database->connect();

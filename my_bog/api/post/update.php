<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
//since its a post request
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');


include_once '../../config/config.php';
include_once '../../model/post.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Post($db);


//Get the rw posted Data 
$data = json_decode(file_get_contents('php://input'));

// set id 
$post->id = $data->id;

$post->title = $data->title;
$post->body = $data->body;
$post->author = $data->author;
$post->category_id = $data->category_id;


//update post 
if ($post->update()) {
    echo json_encode(array('message' => 'post updated'));
} else {
    echo json_encode(array('message' => 'post not updated'));
}

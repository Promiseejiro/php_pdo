<?php
//headers
// header('Access-Control-Allow-Origin:*');
// header('Content-Type:application/json');
// include_once '../headers/headers.php';



include_once('../../config/config.php');
include_once('../../model/post.php');


//intantiate database

$database = new Database();
$db = $database->connect();


$post = new Post($db);
$result = $post->read();


$num = $result->rowCount();

///check is post exist

if ($num > 0) {

    $post_arr = array();
 //   $post_arr['data'] = array();



    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);


        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' => $category_id,
            'category_name' => $category_name
        );

        array_push($post_arr, $post_item);
        echo json_encode($post_arr);
    }
} else {
    echo json_encode(array('message' => 'no post found'));
}

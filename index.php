<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'pdopost';


//setDsn 

$dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;


$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//pdo query
// $stmt = $pdo->query('SELECT * FROM post');
// // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
// //     echo $row['title'] . `<br>`;
// // }
// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {

//     echo $row->title . `<br>`;
// }


// Prepared statement


// $sql = "SELECT * FROM post WHRE author ='$autor'";

$author = 'brad';
//positional params

// $sql = "SELECT * FROM post WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $post =$stmt->fetchAll();
// var_dump($post);


///name param

// $sql = "SELECT * FROM post WHERE author = :author";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author]);
// $post = $stmt->fetchAll();

// foreach ($post as $item) {
//     echo $item->title;
// }


// //fetch single post 
// $id = 1;
// $sql = 'SELECT * FROM post WHERE  id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $posts = $stmt->fetch();

// echo $posts->body;


//get row counte
// $author = 'john';

// $stmt = $pdo->prepare('SELECT * FROM post WHERE author =?');
// $stmt->execute([$author]);

// $postCount = $stmt->rowCount();


// echo $postCount;



// $title = 'post five ';
// $body = 'This is post five';
// $author = 'kelvin';

// $sql = 'INSERT INTO post(title,body,author) VALUES(:title,:body,:author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'post added';


// $id = 1;
// $body = 'this is the updtaeed post';

// $sql = 'UPDATE post SET body =:body WHERE id =:id';

// $stmt = $pdo->prepare($sql);
// $stmt->execute(['body' => $body, 'id' => $id]);
// echo 'Post updated';

$id = 1;

// $sql  = 'DELETE FROM post WHERE id =:id';

// $stmt = $pdo->prepare($sql);

// $stmt->execute(['id' => $id]);
// echo 'post deleted ';


$search = '%five%';

$sql = 'SELECT * FROM post where body LIKE ?';
$stmt = $pdo->prepare($sql);

$stmt->execute([$search]);
$post = $stmt->fetchAll();


foreach ($post as $item) {
    echo $item->body;
}

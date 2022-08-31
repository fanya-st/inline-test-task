<?php
require 'db.php';

$posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'),true);
$comments = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/comments'),true);

foreach($posts as $post){
	$sql = 'INSERT INTO post SET id='.$post['id'].', userId='.$post['userId'].', title="'.$post['title'].'", body="'.$post['body'].'"';
    if(mysqli_query($conn, $sql))
		$posts_count++;
}

foreach($comments as $comment){
	$sql = 'INSERT INTO comment SET id='.$comment['id'].', postId='.$comment['postId'].', email="'.$comment['email'].'", name="'.$comment['name'].'", body="'.$comment['body'].'"';
    if(mysqli_query($conn, $sql))
		$comment_count++;
}
echo 'Загружено '.$posts_count.' записей и '.$comment_count.' комментариев';
echo "<script>console.log('Загружено ".$posts_count." записей и ".$comment_count." комментариев' );</script>";

?>

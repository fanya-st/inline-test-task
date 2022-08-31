
<form method="post">
<label for="search_field">Текст комментария:</label> <input type="text" minlength="3" name="search_field" id="search_field" value="<?=$_POST['search_field']?>">
<button type="submit" name="action" value="search">Фильтр</button>
</form>
<?if(isset($_POST['search_field'])):?>
<?
	$sql = "SELECT post.title, comment.name, comment.body FROM comment JOIN post on post.id=comment.postId where comment.body LIKE '%".$_POST['search_field']."%'";
	$result = mysqli_query($conn, $sql);

	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>
<?endif;?>
<?if(!empty($rows) && $_POST['search_field']!=''):?>
<table>
<tr>
<TH>Заголовок записи</TH>
<TH>Комментарий</TH>
</tr>
<?foreach($rows as $row):?>
<td><?=$row['title']?></td>
<td><?=$row['body']?></td>
</tr>
<?endforeach;?>
</table>
<?endif;?>

<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
<h1 align="center" style="background-color:powderblue;" style="color:blue;">BOOKS MANAGEMENT</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php
	$booksJson = file_get_contents('books.json');
	$books = json_decode($booksJson, true);
?>



<form action="search.php" method="post">
	<input type="text" name="search" id="search"><br>
	<input class="btn btn-secondary" type ="submit" name="search">
</form>

<table class="table table-dark table-striped">
	<tr>
		<th> ID </th>
		<th> Title </th>
		<th> Isbn </th>
		<th> Author </th>
		<th> Pages </th>
		<th> Available </th>
		<th> Delete </th>

	</tr>
	<?php foreach ($books as $key => $book): ?>
	<tr>
	    <td>
			<?php echo ($book['id']); ?>
		</td>
		<td>
			<?php echo ($book['title']); ?>
		</td>
		<td>
			<?php echo ($book['isbn']); ?>
		</td>
		<td>
			<?php echo ($book['author']); ?>
		</td>
		<td>
			<?php echo ($book['pages']); ?>
		</td>
		<td>
			<?php echo ($book['available']); ?>
		</td>
		<td>
		    <button class="btn btn-danger"><a href="<?php echo 'delete.php?'.'id='.$key ?>">Delete</a></button>
		</td>

	</tr>
	<?php endforeach; ?>
	
</table>
<form><button class="btn btn-secondary" ><a href="add.php">Add</a></button></form>

</body>
</html>
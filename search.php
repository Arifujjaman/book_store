<?php
$books="";
if (file_exists('books.json')){
    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}

$search = $_POST['search'];
$result=array();
print_r($search);

foreach ($books as $key => $value) {
    if($value['author']==$search){
        array_push($result,$value);
    }
}

?>

<table border="2" bordercolor="skyblue">
	<tr>
		<th> ID </th>
		<th> Title </th>
		<th> Isbn </th>
		<th> Author </th>
		<th> Pages </th>
		<th> Available </th>
		<th> Delete </th>

	</tr>
	<?php foreach ($result as $key => $book): ?>
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
		    <button style="background-color:red"><a href="<?php echo 'delete.php?'.'id='.$key ?>">Delete</a></button>
		</td>

	</tr>
	<?php endforeach; ?>
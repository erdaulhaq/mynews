<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
<form action="<?=base_url('Homecontroller/edit_news/')?><?php echo $id_news?>" method="POST">
<br>
<b>EDIT NEWS</b>
<br>
<br>
<table align="center">
	<tr>
		<td>Title</td>
		<td>:</td>
		<td><input type="text" value="<?php echo $news->title ?>" name="title" required></td>		
	</tr>
	<tr>
		<td>Content</td>
		<td>:</td>
		<td><input type="text" value="<?php echo $news->content ?>" name="content" required></td>		
	</tr>
	<tr>
		<td>Category</td>
		<td>:</td>
		<td>
			<select name="category">
			<?php foreach ($cat as $kategori) { ?>
			
				<option value="<?php echo $kategori['id_category'] ?>"><?php echo $kategori['name_category'] ?></option>
				<?php } ?>
			</select>
		</td>		
	</tr>
	<tr>
		<td>Image</td>
		<td>:</td>
		<td><input type="file" placeholder="Image" name="image"></td>
	</tr>

	
</table>
<button type="submit">Submit</button>
</form>
</body>
</html>
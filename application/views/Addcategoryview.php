<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
<br>
<b>CURRENT CATEGORY</b>
<br>
<br>
<table border="1" align="center">
<tr>
	<th>Category</th>
	<th>Control</th>
</tr>
<?php foreach ($category as $cat) { ?>
<tr>
	<td><?php echo $cat['name_category']; ?></td>
	<td>
			<a href="<?php echo base_url();?>Homecontroller/delete_cat/<?php echo $cat['id_category']; ?>">DELETE</a>
	</td>
</tr>
<?php } ?>
</table>

<form action="<?=base_url('Homecontroller/add_category')?>" method="POST">
<br>
<b>ADD CATEGORY</b>
<br>
<br>
<table align="center">
	<tr>
		<td>Category Name</td>
		<td>:</td>
		<td><input type="text" placeholder="Category Name" name="category" required></td>		
	</tr>
</table>
<button type="submit">Submit</button>
</form>
</body>
</html>
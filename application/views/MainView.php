<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">
<b>NEWS ADMIN</b><br><br>
<table border="1" align="center">
<tr>
	<th>Title</th>
	<th>Content</th>
	<th>Category</th>
	<th>Image</th>
	<th>Control</th>
</tr>
<?php foreach ($news as $berita) { ?>
	<tr>
		<td><?php echo $berita['title'] ?></td>
		<td><?php echo $berita['content'] ?></td>
		<td><?php echo $berita['name_category'] ?></td>
		<td><?php echo $berita['image'] ?></td>
		<td>
			<a href="<?php echo base_url();?>Homecontroller/edit_news_page/<?php echo $berita['id_news']; ?>">EDIT</a>
		
		
			<a href="<?php echo base_url();?>Homecontroller/delete_news/<?php echo $berita['id_news']; ?>">DELETE</a>
		</td>
	</tr>
	<?php } ?>
</table>
<br>
<a href="<?php echo base_url();?>Homecontroller/add_news_page/">ADD NEWS</a><br>
<a href="<?php echo base_url();?>Homecontroller/add_category_page/">ADD CATEGORY</a>

</body>
</html>
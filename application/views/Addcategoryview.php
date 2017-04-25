<section class="content">
        <div class="container-fluid">
<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Add Category</b>
                            </h2>                            
                        </div>
                        <div class="body">
                            <form action="<?=base_url('Homecontroller/add_category')?>" method="POST" >
                                <label for="title">Category Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name_category" class="form-control" placeholder="Category Title" required>
                                    </div>
                                </div>                                
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->         
        </div>
    </section>
<!-- 
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
</html> -->
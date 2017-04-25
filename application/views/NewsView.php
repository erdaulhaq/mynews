<section class="content">
        <div class="container-fluid">
            
            
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                NEWS
                                <small>List of News from database</small>
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                       
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Content</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($news as $berita) { ?>
                                    <tr>
                                        
                                        <td><?php echo $berita['title'] ?></td>
                                        <td><?php echo $berita['name'] ?></td>
                                        <td><?php echo $berita['content'] ?></td>
                                        <td><?php echo $berita['name_category'] ?></td>
                                        <td><img src="<?php echo base_url()?>uploads/<?php echo $berita['image']; ?>" width="300" height="300"></td>
                                        <td>
            <a href="<?php echo base_url();?>Homecontroller/edit_news_page/<?php echo $berita['id_news']; ?>"><i class="material-icons">update</i></a>&nbsp &nbsp
            <a href="<?php echo base_url();?>Homecontroller/delete_news/<?php echo $berita['id_news']; ?>"><i class="material-icons">delete</i></a>
        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->
            
        
        </div>
    </section>


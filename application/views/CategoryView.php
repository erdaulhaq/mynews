<section class="content">
        <div class="container-fluid">
            
            
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Category
                                <small>List of Category from database</small>
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>                                                                              
                                        <th>Category</th>                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($category as $cat) { ?>
                                    <tr>                                                                               
                                        <td><?php echo $cat['name_category'] ?></td>                                        
                                        <td>
            <a href="<?php echo base_url();?>Homecontroller/edit_cat_page/<?php echo $cat['id_category']; ?>"><i class="material-icons">update</i></a>&nbsp &nbsp
            <a href="<?php echo base_url();?>Homecontroller/delete_cat/<?php echo $cat['id_category']; ?>"><i class="material-icons">delete</i></a>
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


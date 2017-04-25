<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo  $this->session->userdata('name'); ?></div>
                    <div class="email"><?php echo  $this->session->userdata('email'); ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="<?php echo base_url();?>Homecontroller/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo base_url();?>Homecontroller/home_page">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>View Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>Homecontroller/NewsView/">News</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Homecontroller/CategoryView/">Category</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Add Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url();?>Homecontroller/add_news_page/">Add News</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>Homecontroller/add_category_page/">Add Category</a>
                            </li>                    
                        </ul>
                    </li>
                    
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">MyNews</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>
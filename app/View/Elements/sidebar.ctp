<!-- Sidebar -->
<div class="sidebar collapse">
    <div class="sidebar-content">

        <!-- User dropdown -->
        <div class="user-menu">
            <a href="#">
                <img src="http://placehold.it/300">
                <div class="user-info">
                    Jamie Joubert <span>Super Admin</span>
                </div>
            </a>

        </div>
        <!-- /user dropdown -->


        <!-- Main navigation -->
        <ul class="navigation">
            <li><a href="index.html"><span>Dashboard</span> <i class="icon-home2"></i></a></li>
            <li><a href="index.html"><span>Applications</span> <i class="icon-folder2"></i></a></li>
            <li <?php echo $this->params['controller'] == "customers" ? 'class="active"' : ""; ?>>
                <?php
                    echo $this->Html->link(
                        "<span>Customers</span> <i class='icon-smiley'></i>",
                        array('controller' => 'customers', 'action' => 'index'),
                        array('escape' => false)
                    );
                ?>
            </li>
            <li><a href="index.html"><span>Airtime</span> <i class="icon-phone3"></i></a></li>
            <li><a href="index.html"><span>Deals</span> <i class="icon-mobile2"></i></a></li>
            <li><a href="index.html"><span>Contracts</span> <i class="icon-drawer3"></i></a></li>
            <li><a href="index.html"><span>Courier Listing</span> <i class="icon-mail-send"></i></a></li>
            <li><a href="index.html"><span>System Users</span> <i class="icon-man"></i></a></li>
        </ul>
        <!-- /main navigation -->

    </div>
</div>
<!-- /sidebar -->


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="min-height: 65px;">
            <div class="pull-left image">
<!--                <img src="--><?php //echo base_url()?><!--/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                <?php $imglogo =  no_image_view('/uploads/schools/'.logo_image(),'/uploads/schools/no_image_logo.jpg',logo_image()); ?>
                <img src="<?php echo $imglogo; ?>" class="" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo profile_name();?></p>
                <a href="#" ><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php $role_id = newSession()->role;?>


            <li class="treeview Active">
                <?php
                    echo add_main_ajax_based_menu_with_permission('Dashboard', '/Admin/Dashboard', $role_id, 'fa fa-dashboard', '/Admin/DashboardAjax','Dashboard');
                ?>
            </li>

            <?php
                $modArray = ['Sales','Return_sale','Invoice'];
                $menuAccess = all_menu_permission_check($modArray,$role_id);
                if ($menuAccess == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-cart-plus"></i>
                    <span>Sales</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Sales List', '/Admin/Sales', $role_id, 'fa fa-cart-plus', '/Admin/Sales_ajax','Sales'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Invoice', '/Admin/Invoice', $role_id, 'fa fa fa-tasks', '/Admin/Invoice_ajax','Invoice'); ?>
                </ul>
            </li>
            <?php } ?>





            <?php
                $modArraySt = ['Stores','Products','Product_category','Brand'];
                $menuAccessSt = all_menu_permission_check($modArraySt,$role_id);
                if ($menuAccessSt == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-tasks"></i>
                    <span>Stock</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Stores', '/Admin/Stores', $role_id, 'fa fa-tasks', '/Admin/Stores_ajax' ,'Stores'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Products', '/Admin/Products', $role_id, 'fa fa-tasks', '/Admin/Products_ajax','Products'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Product Category', '/Admin/Product_category', $role_id, 'fa fa-tasks', '/Admin/Product_category_ajax','Product_category'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Brand', '/Admin/Brand', $role_id, 'fa fa-tasks', '/Admin/Brand_ajax','Brand'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php
            $modArrayRe = ['Balance_report','Stock_report','Sales_report','Purchase_report','Acquisition_due','Owe_amount'];
            $menuAccessRe = all_menu_permission_check($modArrayRe,$role_id);
            if ($menuAccessRe == true){
                ?>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa fa-line-chart"></i>
                        <span>Report</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <?php echo add_main_ajax_based_menu_with_permission('Stock Report', '/Admin/Stock_report', $role_id, 'fa fa-line-chart', '/Admin/Stock_report_ajax','Stock_report'); ?>

                    </ul>
                </li>
            <?php } ?>

            <?php
                $modArrayCus = ['Customer_type','Customers'];
                $menuAccessCus = all_menu_permission_check($modArrayCus,$role_id);
                if ($menuAccessCus == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-users"></i>
                    <span>Customer </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Customer type', '/Admin/Customer_type', $role_id, 'fa fa-child', '/Admin/Customer_type_ajax','Customer_type'); ?>

                    <?php echo add_main_ajax_based_menu_with_permission('Customers', '/Admin/Customers', $role_id, 'fa fa-child', '/Admin/Customers_ajax','Customers'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php
                $modArrayBank = ['Bank','Bank_deposit','Bank_withdraw','Chaque'];
                $menuAccessBank = all_menu_permission_check($modArrayBank,$role_id);
                if ($menuAccessBank == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-bank"></i>
                    <span>Bank</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Bank', '/Admin/Bank', $role_id, 'fa fa-th-list', '/Admin/Bank_ajax','Bank'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Deposit', '/Admin/Bank_deposit', $role_id, 'fa fa-th-list', '/Admin/Bank_deposit_ajax','Bank_deposit'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Withdraw', '/Admin/Bank_withdraw', $role_id, 'fa fa-th-list', '/Admin/Bank_withdraw_ajax','Bank_withdraw'); ?>
                    <?php echo add_main_ajax_based_menu_with_permission('Chaque', '/Admin/Chaque', $role_id, 'fa fa-th-list', '/Admin/Chaque_ajax','Chaque'); ?>
                </ul>
            </li>
            <?php } ?>



            <?php
                $modArrayUse = ['User','Role'];
                $menuAccessUse = all_menu_permission_check($modArrayUse,$role_id);
                if ($menuAccessUse == true){
            ?>
            <li class="treeview">
                <a href="#" >
                    <i class="fa fa-line-chart"></i>
                    <span>Users </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <?php echo add_main_ajax_based_menu_with_permission('Users', '/Admin/User', $role_id, 'fa fa-hospital-o', '/Admin/User_ajax','User'); ?>

                    <?php echo add_main_ajax_based_menu_with_permission('Users Role', '/Admin/Role', $role_id, 'fa fa-hospital-o', '/Admin/Role_ajax','Role'); ?>
                </ul>
            </li>
            <?php } ?>

            <?php echo add_main_ajax_based_menu_with_permission('Settings', '/Admin/Settings', $role_id, 'fa fa-hospital-o', '/Admin/Settings_ajax','Settings'); ?>






        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


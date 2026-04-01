
    <div class="content-wrapper" id="viewpage">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <a href="<?php echo site_url('/Admin/Sales/create'); ?>" class="btn ">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h2></h2>
                                <p id="dashp">Sale</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-fw fa-cart-plus"></i>
                            </div>
                            <a href="<?php echo site_url('/Admin/Sales/create'); ?>" class="small-box-footer">Sale Create <i class="fa fa-arrow-circle-right"></i></a>
                        </div></a>
                </div>
                <!-- ./col -->



                <div class="col-md-4 ">
                    <div class="info-box " style="margin-top: 20px;">
                        <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Products</span>
                            <span class="info-box-number"><?php echo $totalProduct; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <div class="info-box" style="margin-top: 20px;">
                        <span class="info-box-icon bg-green"><i class="ion ion-person-add"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Customers</span>
                            <span class="info-box-number"><?php echo $totalCustomer; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>

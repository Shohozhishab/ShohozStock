<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Customer <small>Customer Create</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Customer </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12" style="margin-bottom: 15px;">
                <a href="#" onclick="showData('<?php echo site_url('/Admin/Customers_ajax'); ?>','<?php echo '/Admin/Customers';?>')"  class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>

                <a href="#" onclick="showData('<?php echo site_url('/Admin/Customer_type_ajax') ?>','/Admin/Customer_type')" class="btn btn-default">Customer type</a>
            </div>
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Customer Create</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div id="message"></div>
                            <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            <div class="col-lg-6" >
                                <form id="geniusform" action="<?php echo $action; ?>" method="post">
                                    <h4>New Customer</h4>
                                    <div class="form-group">
                                        <label for="varchar">Customer Name </label>
                                        <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name" required />
                                        <div class="error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Mobile </label>
                                        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile"  required/>
                                        <div class="error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Customer Type</label>

                                        <select class="form-control" name="cus_type_id" id="cus_type_id" required>
                                            <option value="">Please Select</option>
                                            <?php echo getAllListInOption('','cus_type_id','type_name','customer_type'); ?>
                                        </select>
                                        <div class="error"></div>
                                    </div>

<!--                                    <button type="submit" class="btn btn-primary geniusSubmit-btn">Register</button>-->
                                    <button type="button" class="btn btn-primary" onclick="customerValidat()"  >Create</button>
                                    <a href="javascript:void(0)" onclick="showData('<?php echo site_url('/Admin/Customers_ajax/'); ?>','<?php echo '/Admin/Customers/'; ?>')" class="btn btn-default">Cancel</a>
                                </form>
                            </div>


                            <div class="col-lg-6" style="border-left: 1px solid #cecdcd;">
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
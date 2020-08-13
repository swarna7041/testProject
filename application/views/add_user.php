
    

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    Add Information Form
                       
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">User Information</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                
                               
                                <form action="<?php echo $this->config->item('base_url'); ?>index.php/Admin_controller/add_user_submit" method="post" enctype="multipart/form-data">
                                    <div class="box-body capitalize">
                                       

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label><span  style="color:red"class="required">*</span>
                                            <input type="text" name="name" class="form-control capitalize" id="name" placeholder="User Name" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Email</label><span  style="color:red"class="required">*</span>
                                            <input type="email" name="email" class="form-control capitalize" id="email" placeholder="User Email" required="required">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Batch</label><span  style="color:red"class="required">*</span>
                                            <input type="text" name="batch" class="form-control capitalize" id="batch" placeholder="Batch" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label><span  style="color:red"class="required">*</span>
                                            <input type="text" name="password" class="form-control capitalize" id="password" placeholder="Password" required="required">
                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            <!-- Form Element sizes -->
                           
                            
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
       
        
    </body>
</html>
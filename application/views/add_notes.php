
    

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Add Notes
                       
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
                                    <h3 class="box-title">Notes Information</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                
                               
                                <form action="<?php echo $this->config->item('base_url'); ?>index.php/Admin_controller/add_note_submit" method="post">
                                    <div class="box-body capitalize">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Note Title</label><span  style="color:red"class="required">*</span>
                                            <input type="text" name="note_title" class="form-control capitalize" id="note_title" placeholder="Note Title" required="required">
                                        </div>
                                        
                                        <div class="form-group capitalize">
                                            <label >Description</label><span  style="color:red"class="required">*</span>
                                            <textarea name="note_description" class="form-control capitalize" id="note_description" placeholder="Note Description" required="required"></textarea>                                           
                                        </div>
                                         
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                   
                                        <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
                                    </div>
                                </form>
                            </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div>
    </body>
</html>


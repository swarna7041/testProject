
    

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    Notes                       
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                        <?php for($i=0; $i<count($notes); $i++){ ?>
                                        <div class="service_row">
                                            <h4 class="card-title mb-1"><?php echo $notes[$i]->note_title;?></h4>
                                            <p class="card-text"><?php echo $notes[$i]->note_description;?></p>
                                        </div>
                               <?php }?>
                           </div>
                        </div>    
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->       
    </body>
</html>


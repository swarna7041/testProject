
    <?php //print_r($colors); exit;?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->                

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            
                                         
                                    <div class="col-md-6 box-body capitalize">                                   
                                        <div class="form-group">
                                            <img src="<?php echo $this->config->item('base_url');?>uploads/<?php echo $products[0]['product_image']; ?>" style="height: 400px;width: 200px;">
                                          
                                           <div class="box-footer" style="margin-top:10px;" >
                                           <button class="btn btn-primary" >ADD TO CART</button>
                                            </div>
                                        </div>                                        
                                    </div>
                                     <div class="col-md-6 box-body capitalize">                                  
                                        <div class="form-group">
                                            <div> <label>Product Name:</label> <?php echo $products[0]['product_name']; ?></div>
                                            <div><label>Product Code:</label> <?php echo $products[0]['product_code']; ?></div>
                                            <div><label>Product Price:</label> <span id="newprice"><?php echo $products[0]['product_price']; ?></span></div>
                                            <div><label>Description:</label> <?php echo $products[0]['product_desc']; ?></div>
                                        </div>
                                            <div class="form-group">                                            
                                            <select id="product_code" name="product_code" class="form-control" placeholder="Product Colors" onchange="changeprice(this.value)">
                                             <option value="">Product Colors</option>
                                             <?php
                                             for($i=0; $i<count($colors); $i++) {
                                              ?>                                                  
                                                  <option value="<?php echo $colors[$i]->product_code.'/'.$colors[$i]->price .'/'.$products[0]['product_price']; ?>"><?php echo $colors[$i]->pcolor_name; ?></option>
                                                        
                                            <?php } ?>
                                        </select>
                                        </div>

                                        </div>
                                        
                                    </div>


                                    <!-- /.box -->
                               
                                   
                                  
                            <!-- Form Element sizes -->
                           
                            
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
       

    </body>
</html>

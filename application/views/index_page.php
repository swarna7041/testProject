
    

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                    Well Come to St. Xavier’s High School
                       
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div id="display-success">
                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success errormsg">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php }else if($this->session->flashdata('error')){  ?>
                                <div class="alert alert-danger errormsg">
                                    <a href="#" class="close " data-dismiss="alert">&times;</a>
                                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php }else if($this->session->flashdata('warning')){  ?>
                                <div class="alert alert-warning">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                                </div>
                            <?php }else if($this->session->flashdata('info')){  ?>
                                <div class="alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                                </div>
                            <?php } ?>
                            </div>
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary" style="text-align:right;">

                                                                       
                                <div class="searchable">    
                                 <input type="text" placeholder="Search Name/Batch" autocomplete="off" name="field-keywords" id="searchstudent" onkeyup="studentSearch()">
                                 <ul>
                                    <li><div id="name_data"></div></li>                                    
                                </ul>
                                </div>                               
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal1">
                                  LogIn
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                                  Register
                                </button>
                                 
                            <!-- Form Element sizes -->

                           </div>
                        </div>    
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
                <div class="container"> 
                    <img style="height:auto; width:100%; margin-top:30px;" src="<?php echo $this->config->item('base_url');?>assets/img/top-banner.png"/>
                </div>        
                


<section style="background-color:#ffffff; padding:0 0 30px 0 " id="section2" class="menu_page">
    <div class="container">
        <div class="">
            <!--<h4 class="sectionsubtitle">Our Projects</h4>-->
            <h2>Preparing Students for a Successful Future by Enhancing  their Skills and Abilities</h2>
            <div class="row">
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="col-md-4">
                            <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                     <div class="col-md-4">
                            <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                </div>
                
                <div class="col-md-12" style="margin-top: 25px;">
                    <div class="col-md-4">
                            <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                    <div class="col-md-4">
                        <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                     <div class="col-md-4">
                            <div class="project-thumb"><img src="<?php echo $this->config->item('base_url');?>assets/img/image11.jpg" class="hvr-grow" /></div>
                    </div>
                </div>
            </div>
        </div><!-- .end section class -->  
        <div class="clear"></div>

    </div>                    
    </div><!-- container -->
</section>






            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
       
       <div class="copyright-wrapper" style="background-color: #333742;width: 100%;padding: 50px 0;">
            <div class="container">                
                <div class="design-by">
                    <div class="menu-footer-copyright-menu-container">
                        <ul id="menu-footer-copyright-menu" class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Courese</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>       
                </div>
                <div class="clear"></div>
            </div> 
       </div> 
    </body>
</html>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $this->config->item('base_url'); ?>index.php/login/add_users_submit" method="post" enctype="multipart/form-data">
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
                    <input type="password" name="password" class="form-control capitalize" id="password" placeholder="Password" required="required">
                </div>
                
            </div><!-- /.box-body -->            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>            
        </form>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="basicExampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $this->config->item('base_url'); ?>index.php/login/login_submits" method="post" enctype="multipart/form-data">
            <div class="box-body capitalize">              

                <div class="form-group">
                    <label for="exampleInputEmail1">UserId</label><span  style="color:red"class="required">*</span>
                    <input type="text" name="userid" class="form-control capitalize" id="name" placeholder="User Id" required="required">
                </div>               

                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label><span  style="color:red"class="required">*</span>
                    <input type="password" name="password" class="form-control capitalize" id="password" placeholder="Password" required="required">
                </div>
                
            </div><!-- /.box-body -->            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>            
        </form>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
    function studentSearch(){
var searchstudent = $("#searchstudent").val();
    $.ajax({
        type: "POST",
        url:'<?php echo base_url();?>' +'/Login/get_userdata',            
        data: {keyword: searchstudent},
        dataType: "json",
        success: function (data) {
            console.log(data);
            var htmldatac="";
            if(data.length > 0){                 
                for(var i=0;i<data.length;i++){         
                    htmldatac+=' <a href="javascript:void(0);"><li id="city'+data[i].id+'">'+data[i].name+'</li></a>';                    
                }               
                $("#name_data").html(htmldatac);

            } else{             
                htmldatac+='<div>';
                htmldatac+='<li><h6 align="left">No Name/Class Found.</h6></li>'
                htmldatac+='</div>';
                $("#name_data").html(htmldatac);
            }
        }
    });      
  
}
</script>
<style>
     .project-thumb img {
        width: 100%;
    }
    div.searchable {
    /*width: 300px;*/
    float: left;
    margin: 0 15px;
}
.searchable ul {
    /*display: none;*/
    list-style-type: none;
    background-color: #fff;
    border-radius: 0 0 5px 5px;
    border: 1px solid #add8e6;
    border-top: none;
    max-height: 180px;
    margin: 0;
    overflow-y: scroll;
    overflow-x: hidden;
    padding: 0;
}

.searchable ul li {
    /*padding: 7px 9px;*/
    border-bottom: 1px solid #e1e1e1;
    cursor: pointer;
    color: #6e6e6e;
}

.searchable ul li.selected {
    background-color: #e8e8e8;
    color: #333;
}
</style>

<script>
$(document).ready(function(){
setTimeout(function(){  $('.errormsg').hide(); }, 3000);
});
</script>
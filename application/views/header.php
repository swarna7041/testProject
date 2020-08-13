<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $this->config->item('base_url'); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

       

        <!-- Ionicons -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
         <script src="<?php echo $this->config->item('base_url'); ?>assets/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
       
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmr0C4rYcelBu1QuTXEe3qIwhqXKFHamM&callback=initMap"></script> -->
		<link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>assets/css/bootstrap-multiselect.css">
        <link href="<?php echo $this->config->item('base_url'); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo $this->config->item('base_url'); ?>assets/js/bootstrap-select.min.js"></script>
        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/bootstrap-multiselect.js"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip({
             placement : 'top'
                });
            });
        </script>
        

        <script type="text/javascript">
            function changeprice(value) {
                //alert(value);
                var val = value.split('/');
                var pcode= val[0];
                var cprice = val[1];
                var pprice = val[2];
                var newprice = parseInt(pprice) + parseInt(cprice);                
                $("#newprice").html(newprice);
            }
        </script>
    </head>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tambah Data</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Tambah Data</h2>
                    <div style="color: red;"><?php echo validation_errors(); ?></div>
                    <?php echo form_open("pegawai/tambah"); ?>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ID" name="input_id" value="<?php echo set_value('input_id'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAMA" name="input_nama" value="<?php echo set_value('input_nama'); ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="DEPARTEMEN" name="input_dept" value="<?php echo set_value('input_dept'); ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="TELEPON" name="input_telp" value="<?php echo set_value('input_telp'); ?>">
                        </div>
                        
                        <div class="input-group">
                        <input type="submit" name="submit" value="Simpan" style="height: 30px">
                        </div>
                        <div class="input-group">
                        <a href="<?php echo base_url(); ?>"><input type="button" value="Batal" style="height: 30px"></a>
                        </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

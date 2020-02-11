<!DOCTYPE html>
<html lang="en">
<head>

    <title> <?=$title;?> - BNSP </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styelheet -->
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/admin-panel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/datatables.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/datepicker.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/skins-lte.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/css/font-awesome.min.css')?>">

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <?php $this->load->view($header); ?>
        </header>

        <!-- Sidebar Template -->
        <aside class="main-sidebar">
            <?php $this->load->view($sidebar); ?>
        </aside>
        <!-- End Sidebar template -->

        <!-- Content -->
        <div class="content-wrapper">
            <?php $this->load->view($content); ?>
        </div>
        <!-- End Content -->
    </div>

    <!-- Javascript Source -->
    <script src="<?=site_url('vendor/js/jquery-3.4.1.js')?>"></script>
    <script src="<?=site_url('vendor/js/bootstrap.min.js')?>"></script>
    <script src="<?=site_url('vendor/js/datatables.js')?>"></script>
    <script src="<?=site_url('vendor/js/jquery.chained.min.js')?>"></script>
    <script src="<?=site_url('vendor/js/datepicker.js')?>"></script>
    <script src="<?=site_url('vendor/js/adminlte.min.js')?>"></script>
    <script src="<?=site_url('vendor/js/chart.bundle.min.js')?>"></script>
    <script src="<?=site_url('vendor/js/sweetalert2.all.min.js')?>"></script>
    <script src="<?=site_url('vendor/js/custom.js')?>"></script>

    
</body>
</html>
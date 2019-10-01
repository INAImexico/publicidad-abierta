<?php

header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>dist/img/favicon.ico" />
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-slider.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url(); ?>dist/css/font-awesome-4.3.0.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <!--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
        <!--<link href="<?php /*echo base_url();*/ ?>dist/css/ionicons-2.0.0.css" rel="stylesheet" type="text/css" />-->
        <!-- fullCalendar 2.2.5-->
        <link href="<?php echo base_url(); ?>plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Theme style -->
        <link href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- Main.css -->
        <link href="<?php echo base_url(); ?>dist/css/Main.css" rel="stylesheet" type="text/css" />
        <!-- DataTables -->
        <!--<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
        <!--<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>plugins/jQuery/jQuery-3.3.1.js"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
        


        <link href="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
<body class="hold-transition skin-blue layout-top-nav">
        <div class="tpo_logos">
            <div class="tpo_rellenar"></div>
            <div class="tpo_page" style="z-index:99; position:relative;">
                <img src="<?php echo base_url(); ?>dist/img/triangulo_color.png"/>
                <div style="position:absolute; left:0px; top:20px; visibility:visible z-index:2;">
                    <img src="<?php echo base_url(); ?>dist/img/logo_PO.png"/>
                </div>
                <img src="<?php echo base_url(); ?>data/logo/logotop.png" style="float:right;width:150px;height:90px;margin-top:10px;" />
            </div>
        </div>
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li style="max-width:130px;" class="<?php if(@$active == 'inicio') { echo ' tpo_active'; } ?>"><a href="<?php echo base_url(); ?>index.php/tpov1/inicio">Inicio</a></li>
                            <li style="max-width:130px;" class="<?php if(@$active == 'presupuesto') { echo ' tpo_active'; } ?>"><a href="<?php echo base_url() . 'index.php/tpov1/presupuesto' ?>">Presupuesto</a></li>
                            <li style="max-width:110px;" class="<?php if(@$active == 'proveedores') { echo ' tpo_active'; } ?>"><a style="padding:6px;" href="<?php echo base_url() . 'index.php/tpov1/proveedores' ?>">Gasto por proveedor</a></li>
                            <li style="max-width:130px;" class="<?php if(@$active == 'gasto_tipo_servicio') { echo ' tpo_active'; } ?>"><a style="padding:6px;" href="<?php echo base_url() . 'index.php/tpov1/gasto_tipo_servicio' ?>">Gasto por tipo de servicio</a></li>
                            <li style="max-width:150px;" class="<?php if(@$active == 'contratos_ordenes') { echo ' tpo_active'; } ?>"><a style="padding:6px;" href="<?php echo base_url() . 'index.php/tpov1/contratos_ordenes' ?>">Contratos y &oacute;rdenes de compra </a></li>
                            <li style="max-width:150px;" class="<?php if(@$active == 'campana_aviso') { echo ' tpo_active'; } ?>"><a style="padding:6px;" href="<?php echo base_url() . 'index.php/tpov1/campana_aviso' ?>"> Campa&ntilde;as y avisos institucionales</a></li>
                            <li style="max-width:140px;" class="<?php if(@$active == 'sujetos_obligados') { echo ' tpo_active'; } ?>"><a href="<?php echo base_url() . 'index.php/tpov1/sujetos_obligados' ?>">Sujetos obligados</a></li>
                            <li style="max-width:130px;" class="<?php if(@$active == 'erogaciones') { echo ' tpo_active'; } ?>"><a href="<?php echo base_url() . 'index.php/tpov1/erogaciones' ?>">Erogaciones</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">             
                        </ul>
                    </div>
                    
            <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
            </nav>
        </header>

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h4>
                        <?php echo $heading; ?>
                        <span><?php echo $heading_s; ?></span>
                    </h4>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>index.php/tpov1/inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <?php
                        
                            $bread = explode("|", $breadcrum);
                            $bread_l = explode("|", $breadcrum_l);
                            for($z = 0; $z < sizeof($bread); $z++)
                            {
                                echo '<li><a href="' . base_url() . 'index.php/tpov1/' . $bread_l[$z] . '">' . $bread[$z] . '</a></li>';
                            }
                        ?>
                            
                    </ol>
                </section>
        
                <!-- Main content -->
                <section class="content">
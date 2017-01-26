<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="description"content="">
        <meta name="author"content="">

        <title>Administrator</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css"rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>assets/admin/bower_components/metisMenu/dist/metisMenu.min.css"rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>assets/admin/dist/css/sb-admin-2.css"rel="stylesheet">

        <link href="<?= base_url() ?>assets/admin/dist/css/timeline.css" rel="stylesheet">

        <link href="<?= base_url() ?>assets/admin/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Timeline CSS -->

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css"rel="stylesheet"type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.ico" />
        <link href="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/css/custom.css"rel="stylesheet">
        <script src="<?= base_url() ?>assets/admin/js/Chart.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top"role="navigation"style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button"class="navbar-toggle"data-toggle="collapse"data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"href="#"> Administrator </a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle"data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw" style="font-size: large;"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">


                            <li>
                                <a href="#">
                                    <div>
                                        <strong>Manu</strong>
                                        <span class="pull-right text-muted">
                                            <em>11/11/2015</em>
                                        </span>
                                    </div>
                                    <div>This is a test content for testing this...</div>
                                </a>
                            </li>
                            <li class="divider"></li>


                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown --><!-- /.dropdown --><!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle"data-toggle="dropdown"href="#">
                            <i class="fa fa-user fa-fw" style="font-size: large;"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Edit Administrator</a></li>
                            <li><a href="#"><i class=" fa fa-edit fa-fw"></i> Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url() ?>user/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar"role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav"id="side-menu">
                            <li><a href="<?= base_url() ?>page/index"><i class="fa fa-windows" ></i> Dashboard</a></li>
                            <li><a href="<?= base_url() ?>menu/show"><i class="fa fa-th-list" ></i> Menu</a></li>
                            <li><a href="<?= base_url() ?>page/show"><i class="fa fa-list-alt" ></i> Pages</a></li>
                            <li><a href="<?= base_url() ?>gallery/show"><i class="fa fa-photo" ></i> Gallery</a></li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

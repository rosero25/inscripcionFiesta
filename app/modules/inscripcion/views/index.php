<!DOCTYPE html>
<html lang="en" ng-app="miApp">

    <head>

   

        <link href="<?php echo asset('/lib/bt3/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo asset('/lib/bt3/css/sandstone.css') ?>" rel="stylesheet">
        <!--<link href="<?php echo asset('/lib/bt3/css/flatly.css') ?>" rel="stylesheet">-->
        <!--<link href="<?php echo asset('/lib/bt3/css/darkly.css') ?>" rel="stylesheet">-->
        <!--<link href="<?php echo asset('/lib/bt3/css/journal.css') ?>" rel="stylesheet">-->
        <link href="<?php echo asset('/css/app.css') ?>" rel="stylesheet">

    </head>

    <body >


        <div class="row affix-row">
            <div class="col-sm-3 col-md-2 affix-sidebar">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Clinica Colombia Es</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse" ng-controller="activeController">
                            <ul class="nav navbar-nav" id="sidenav01">
                                <li >
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                                        <h4>
                                           Clinica Colombia Es
                                            <!--                                            <br>
                                                                                        <small>IOSDSV <span class="caret"></span></small>-->
                                        </h4>
                                    </a>
                                    <!--                                    <div class="collapse" id="toggleDemo0" style="height: 0px;">
                                                                            <ul class="nav nav-list">
                                                                                <li><a href="#">ProfileSubMenu1</a></li>
                                                                                <li><a href="#">ProfileSubMenu2</a></li>
                                                                                <li><a href="#">ProfileSubMenu3</a></li>
                                                                            </ul>
                                                                        </div>-->
                                </li>
                                <!--                                <li>
                                                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                                                                        <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span class="caret pull-right"></span>
                                                                    </a>
                                                                    <div class="collapse" id="toggleDemo" style="height: 0px;">
                                                                        <ul class="nav nav-list">
                                                                            <li><a href="#">Submenu1.1</a></li>
                                                                            <li><a href="#">Submenu1.2</a></li>
                                                                            <li><a href="#">Submenu1.3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </li>-->

                                <li ng-class="{ active: isActive('/')}"><a  href="#"><span class="glyphicon glyphicon-lock"></span> Inicio </a></li>
                                <li ng-class="{ active: isActive('/inscripcion')}"><a href="#/inscripcion"><span class="glyphicon glyphicon-calendar"></span> Formulario Inscripcion <span class="badge pull-right">42</span></a></li>
             
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-10 affix-content">
                <div class="container" > 

                 
                    <div ng-view>

                    </div>
                </div>
            </div>
        </div>
        <script>
        var _token='<?=csrf_token(); ?>';
        </script>
        <script src="<?php echo asset('lib/jQuery/jquery-1.11.0.js') ?>"></script>
        <script src="<?php echo asset('lib/bt3/js/bootstrap.js') ?>"></script>
        <script src="<?php echo asset('lib/angularjs/angular.js') ?>"></script>
        <script src="<?php echo asset('lib/angularjs/angular-route.js') ?>"></script>
        <script src="<?php echo asset('app/js/main.js') ?>"></script>
        <!-- Custom Theme JavaScript -->




    </body>

</html>

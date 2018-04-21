<?php session_start(); require ( "assets/php/controllers/app_functions.php"); require ( "assets/php/controllers/login_functions.php"); 
//require ( "assets/php/controllers/inv_functions.php"); 
checkAuth(); //var_dump($_SESSION); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
    <title>Dashboard - EasyIT</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/material-dashboard.css?v=2.0.0">
    <link rel="stylesheet" href="assets/css/easyit.css">
    <link rel="stylesheet" href="assets/css/footable/FooTable.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body class="">
    <div class="wrapper">
        <?php include_once( "templates/sections/inventory/sidebar.php"); ?>
        <div class="main-panel">
            <?php include_once( "templates/sections/inventory/navbar.php"); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body ">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="devices">
                                        <table id="devicesTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Manufacturer</th>
                                                    <th>Supplier:</th>
                                                    <th>Model:</th>
                                                    <th>Location</th>
                                                    <th>State</th>
                                                    <th>Warranty:</th>
                                                    <th>Notes:</th>
                                                    <th>OS:</th>
                                                    <th>Lan IP:</th>
                                                    <th>Wan IP:</th>
                                                    <th>MAC:</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="licenses">
                                        <table id="licensesTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Key</th>
                                                    <th>Email</th>
                                                    <th class="none">Individual Uses:</th>
                                                    <th class="none">Manufacturer:</th>
                                                    <th class="none">Supplier:</th>
                                                    <th>Status</th>
                                                    <th class="none">Description:</th>
                                                    <th class="none">Duration:</th>
                                                    <th class="none">Expires at:</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="accessories">
                                        <table id="accessoriesTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Category</th>
                                                    <th>Manufacturer</th>
                                                    <th class="none">Supplier</th>
                                                    <th>Model</th>
                                                    <th class="none">Notes</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane " id="consumables">
                                        <table id="consumablesTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Manufacturer</th>
                                                    <th class="none">Supplier:</th>
                                                    <th>Model</th>
                                                    <th class="none">Notes:</th>
                                                    <th>Quantity</th>
                                                    <th class="none">Min. Quantity:</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane " id="components">
                                        <table id="componentsTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Manufacturer</th>
                                                    <th class="none">Supplier:</th>
                                                    <th>Model</th>
                                                    <th class="none">Notes:</th>
                                                    <th>Quantity</th>
                                                    <th class="none">Min. Quantity:</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane " id="services">
                                        <table id="servicesTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Supplier</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Start at:</th>
                                                    <th>End at:</th>
                                                    <th class="none">Renewable</th>
                                                    <th class="none">Notes:</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane " id="models">

                                    </div>
                                    <div class="tab-pane " id="categories">

                                    </div>
                                    <div class="tab-pane " id="states">

                                    </div>
                                    <div class="tab-pane " id="locations">

                                    </div>
                                    <div class="tab-pane " id="manufacturers">

                                    </div>
                                    <div class="tab-pane " id="suppliers">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once( "templates/sections/footer.php"); ?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/footable/footable.js"></script>
<script src="assets/js/bootstrap/bootstrap-material-design.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="assets/js/material-dashboard.js?v=2.0.0"></script>
<script src="assets/js/inventory.js"></script>

</html>

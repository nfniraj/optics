<?php
include 'dbconfig.php';
$prodid = $_GET['id'];
//$suppid = 2;
if (isset($_POST['submit'])) {
    $newprod = $_POST['prodid'];
    $newtype = $_POST['newtype'];
    $newmodel = $_POST['newmodel'];
    $newbrand = $_POST['newbrand'];
    $newdetail = $_POST['newdetail'];


    $sql = "UPDATE `optic_db`.`product_master` SET `Product_Type` = '$newtype', `Product_Model` = '$newmodel', `Product_Brand` = '$newbrand',`Product_Detail` = '$newdetail' WHERE `Product_ID` = '$newprod'";

    $result1 = mysql_query($sql, $conn);

    if (!$result1) {
        die('Could not enter data: ' . mysql_error());
    }
    echo '<script language="javascript">';
    echo 'alert("Record successfully updated!!")';
    echo '</script>';
    //header('location:view_products.php');
} else {
    $sql = "select * from product_master where Product_ID = '$prodid'";
    $result = mysql_query($sql, $conn);
    while ($row = mysql_fetch_array($result)) {
        $type = $row['Product_Type'];
        $model = $row['Product_Model'];
        $brand = $row['Product_Brand'];
        $detail = $row['Product_Detail'];
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Update Product - Ambaji Optics</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Ambaji</b>Optics</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <!--<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>-->

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->



                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Ambaji Optics</span>
                                </a>

                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="logout" >Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <ul class="sidebar-menu">
                        <li class="header">OPERATIONS</li>
                        <li class="treeview">
                            <a href="new_customer.php">
                                <i class="fa fa-circle-o text-purple"  ></i>Add New Customer</a>
                        </li>
                        <li class="treeview active">
                            <a href="show_customers.php"><i class="fa fa-circle-o text-red"></i>Search Customers</a>
                        </li>
                        <li class="treeview">
                            <a href="new_order.php"><i class="fa fa-circle-o text-orange"></i>New Order</a>
                        </li>
                        <li class="treeview">
                            <a href="customer_order_view.php"><i class="fa fa-circle-o text-orange"></i>Search Order</a>
                        </li>

                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>STOCK</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li>
                                    <a href="new_supplier.php"><i class="fa fa-circle-o text-yellow active"></i> <span>Add Supplier</span></a></li>
                                <li>
                                    <a href="show_suppliers.php"><i class="fa fa-circle-o text-green active"></i> <span>Show Suppliers</span></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-red active"></i> <span>Add Inventory</span></a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-purple active"></i> <span>Show Inventory</span></a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-white active"></i> <span>Add Product</span></a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-orange"></i> <span>Show Product</span></a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>REPORTING</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-red"></i> <span>Supplier's Outstanding</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Customer with Balance</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-green"></i> <span>Monthly Sales</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o text-white"></i> <span>Top Products</span></a>
                                </li>
                            </ul>
                        </li>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Product
                        <small>Update Product</small>
                    </h1>
                    <ol class="breadcrumb">
                      <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li><a href="#">Layout</a></li>
                      <li class="active">Fixed</li>-->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="box-body">

                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Update Product</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Product ID</label>
                                            <input type="text" class="form-control select2" id="prodid" name="prodid" value="<?php echo $prodid; ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <input type="text" class="form-control select2" id="newtype" name="newtype" value="<?php echo $type; ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>Product Brand</label>
                                            <input type="text" class="form-control select2" id="newbrand" name="newbrand" value="<?php echo $brand; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Product Model</label>
                                            <input type="text" class="form-control select2" id="newmodel" name="newmodel" value="<?php echo $model; ?>">
                                        </div> 
                                        <div class="form-group">
                                            <label>Product Detail</label>
                                            <input type="text" class="form-control select2" id="newdetail" name="newdetail" value="<?php echo $detail; ?>">
                                        </div>

                                    </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                                <button type="submit" name="submit" class="btn btn-info">Update Supplier Record</button>

                            </div>
                            </form>
                        </div>
                    </div>  
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!--<footer class="main-footer">
              <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.6
              </div>
              <strong>Copyright &copy; 2016 <a href="#">Niraj Yadav</a>.</strong> All rights
              reserved.
            </footer>-->

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>

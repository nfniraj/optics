<?php
include 'dbconfig.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>View Products- Ambaji Optics</title>
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

    </head>
    <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
    <!-- the fixed layout is not compatible with sidebar-mini -->
    <body class="hold-transition skin-blue-light fixed sidebar-mini">
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


                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- User Account: style can be found in dropdown.less -->

                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="dashboard.php" >Dashboard</a>
                            </li>

                            <li>
                                <a href="logout.php" >Logout</a>
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
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>CUSTOMER</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">                            
                                <li class="treeview">
                                    <a href="new_customer.php">
                                        <i class="fa fa-circle-o text-green"  ></i>New Customer</a>
                                </li>
                                <li class="treeview">
                                    <a href="show_customers.php"><i class="fa fa-circle-o text-green"></i>Search Customers</a>
                                </li>

                                <li class="treeview">
                                    <a href="customer_order_view.php"><i class="fa fa-circle-o text-green"></i>Search Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-plus-circle"></i>   
                                <span>SUPPLIER</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li class="treeview">
                                    <a href="new_product.php"><i class="fa fa-circle-o text-blue"></i> <span>New Product</span></a></li>
                                <li class="treeview active">
                                    <a href="view_products.php"><i class="fa fa-circle-o text-blue"></i> <span>Search Products</span></a></li>
                                <li class="treeview">
                                    <a href="new_supplier.php"><i class="fa fa-circle-o text-blue"></i> <span>New Supplier</span></a></li>
                                <li class="treeview">
                                    <a href="show_suppliers.php"><i class="fa fa-circle-o text-blue"></i> <span>Search Suppliers</span></li>
                                <li class="treeview">
                                    <a href="supplier_purchase_view.php"><i class="fa fa-circle-o text-blue"></i> <span>Supplier Purchase</span></li>
                                <li class="treeview">
                                    <a href="show_inventory.php"><i class="fa fa-circle-o text-blue"></i> <span>View Inventory</span></a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                <span>REPORTS</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li class="treeview">
                                    <a href="show_outstanding_suppliers.php"><i class="fa fa-circle-o text-orange"></i> <span>Supplier's Outstanding</span></a>
                                </li>
                                <li class="treeview">
                                    <a href="customer_balance_orders.php"><i class="fa fa-circle-o text-orange"></i> <span>Balance Customers</span></a>
                                </li>
                            </ul>
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
                        View Products
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">

                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <form role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" id="main" autocomplete="off">
                        <div class="box-body">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Search</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="input" placeholder="Type your search term here">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="box-footer" align="center">
                                                <button type="submit" name="submit" class="btn btn-primary">View All Products</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Search results..</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>

                                                        <th width="10%">Product ID</th>
                                                        <th width="10%">Product</th>
                                                        <th width="20%">Model</th>
                                                        <th width="10%">Brand</th>
                                                        <th width="20%">Detail</th>
                                                        <th width="30%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody link="white">

                                                    <?php
                                                    //form is empty show all customers code
                                                    //check if submit button is pressed	
//                                                    if ((!empty($_POST['customername'])) or ( !empty($_POST['mobileno'])) or ( !empty($_POST['fromdate'])) or ( !empty($_POST['todate']))) {
//                                                        //Show filtered list when form fields are filled in
//                                                        $customername = $_POST['customername'];
//                                                        $mobileno = $_POST['mobileno'];
//                                                        //$fromdate = $_POST['fromdate'];
//                                                        //$todate = $_POST['todate'];
//                                                        //To protect MySQL injection for Security purpose
//                                                        $customername = stripslashes($customername);
//                                                        $mobileno = stripslashes($mobileno);
//                                                        //$fromdate = stripslashes($fromdate);
//                                                        //$todate = stripslashes($todate);
//                                                        //$sql="SELECT * FROM customer WHERE Customer_Name LIKE '%" . $customername . "%' OR Customer_Mobile_No LIKE '%" . $mobileno  ."%'";
//                                                        //$sql="SELECT * FROM customer WHERE Customer_Name Like '%".$customername."%'";
//
//                                                        $sql = "SELECT * FROM customer WHERE Customer_Name LIKE '%" . $customername . "%' AND Customer_Mobile_No LIKE '%" . $mobileno . "%'";
//                                                    } else {
//                                                        
//                                                    }
                                                    //if search term is entered below sql query will be used     

                                                    if (isset($_POST['submit'])) {
                                                        $input = $_POST['input'];
                                                        $sql = "SELECT * FROM `product_master` where product_master.Product_Type LIKE '%" . $input . "%' or  product_master.Product_Brand LIKE '%" . $input . "%' or product_master.Product_Model LIKE '%" . $input . "%' or product_master.Product_Detail LIKE '%" . $input . "%' ";
                                                    } else {
                                                        $sql = "SELECT * FROM `product_master` order by Product_ID DESC";
                                                    }

                                                    $result = mysql_query($sql, $conn);
                                                    while ($row = mysql_fetch_array($result)) {

                                                        $id = $row['Product_ID'];

                                                        echo "<tr>";
                                                        //echo ("<td>" . '<a href="show_customers.php?id=' . $id . '">' . $row['Customer_ID'] . '</a>'. "</td>");
                                                        //echo "<td>" . $row['Customer_ID'] . "</td>";
                                                        echo ("<td>" . '<a href="update_product.php?id=' . $id . '">' . $row['Product_ID'] . '</a>' . "</td>");
                                                        //echo "<td>" . $row['Customer_Name'] . "</td>";
                                                        echo "<td>" . $row['Product_Type'] . "</td>";
                                                        echo "<td>" . $row['Product_Model'] . "</td>";
                                                        echo "<td>" . $row['Product_Brand'] . "</td>";
                                                        echo "<td>" . $row['Product_Detail'] . "</td>";
                                                        ?>
                                                    <td> 
<!--                                                        <span class="pull-l-container">
                                                            <small class="label pull-middle bg-white">
                                                                //<?php
//                                                                echo ('<a href="update_product.php?id=' . $row['Product_ID'] . '">' . "Update Product" . '</a>');
//                                                                ?>
                                                            </small>
                                                        </span>-->
                                                        <span class="pull-l-container">
                                                            <small class="label pull-middle bg-white">
                                                                <?php
                                                                echo ('<a href="delete_product.php?id=' . $row['Product_ID'] . '">' . "Delete Product" . '</a>');
                                                                ?>
                                                            </small>
                                                        </span>
                                                        <span class="pull-l-container">
                                                            <small class="label pull-middle bg-white">
                                                                <?php
                                                                echo ('<a href="update_inventory.php?id=' . $row['Product_ID'] . '">' . "Update Inventory" . '</a>');
                                                                ?>
                                                            </small>
                                                        </span>

                                                    </td>
                                                    <?php
                                                    //echo "<td>" . $row['nooforders'] . "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>

                                                </tbody>	
                                                <tfoot>
                                                    <tr>
                                                        <th>Product ID</th>
                                                        <th>Product</th>
                                                        <th>Model</th>
                                                        <th>Brand</th>
                                                        <th>Detail</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

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
        <!-- Select2 -->
        <script src="plugins/select2/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="plugins/input-mask/jquery.inputmask.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <script>
            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();

                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();
            });
        </script>
    </body>
</html>
<?php
	include 'dbconfig.php';
	$customerid = $_GET['id'];
	//$customerid = 1;
	if(isset($_POST['submit']))
	{
		$customername=$_POST['customername'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$mobileno=$_POST['mobileno'];
		$address=$_POST['address'];
		$photourl=$_POST['photourl'];
		
		$sql="UPDATE `optic_db`.`customer` SET `Customer_Name` = '$customername', `Customer_DOB` = '$dob', `Customer_Gender` = '$gender', `Customer_Mobile_No` = '$mobileno', `Customer_Address` = '$address' WHERE `customer`.`Customer_ID` = '$customerid'";
			
        $result1 = mysql_query( $sql, $conn );
            
		if(! $result1 ) {
		   die('Could not enter data: ' . mysql_error());
		}
		echo '<script language="javascript">';
		echo 'alert("Record successfully updated!!")';
		echo '</script>';		
	}
	else
	{
	$sql = "select * from Customer where Customer_ID = '$customerid'";
	$result = mysql_query($sql,$conn);
				while($row = mysql_fetch_array($result))
					{
						$customerid = $row['Customer_ID'];
						$customername = $row['Customer_Name'];
						$dob = $row['Customer_DOB'];
						$gender = $row['Customer_Gender'];
						$mobileno = $row['Customer_Mobile_No'];
						$address = $row['Customer_Address'];
					}
	}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Customer - Ambaji Optics</title>
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
    

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
         
          
          <!-- User Account: style can be found in dropdown.less -->
        
          <!-- Control Sidebar Toggle Button -->
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
        <li class="header">OPERATIONS</li>
		<li class="treeview">
		<a href="show_customers.php"><i class="fa fa-circle-o text-red"></i>Search Customers</a></li>
        <li class="treeview active">
		<a href="new_customer.php"><i class="fa fa-circle-o text-purple"></i>Edit Customer</a>          
        </li>
        <li class="treeview">
		<a href="#"><i class="fa fa-circle-o text-orange"></i>New Order</a>
        </li>
        <li class="treeview">
		<a href="#"><i class="fa fa-circle-o text-green"></i>Inventory</a>
        </li>
      
      
        <li class="header">STOCK</li>
		
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>New Supplier</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Supplier Purchase</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Outstanding</span></a></li>
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
        Customer 
        <small>...</small>
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
              <h3 class="box-title">Edit Customer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="edit_customer.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Customer Name</label>
                  <input type="text" class="form-control" id="customer-name" name="customername" value="<?php echo $customername;?>">
                </div>
				<div class="form-group">
                  <label>Date of Birth</label>
                  <input type="text" class="form-control" id="customer-dob" name="dob" value="<?php echo $dob;?>">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <input type="text" class="form-control" id="customer-gender" name="gender" value="<?php echo $gender;?>">
                </div>
				<div class="form-group">
                  <label>Mobile Number</label>
                  <input type="text" class="form-control" id="mobile-no" name="mobileno" value="<?php echo $mobileno;?>">
                </div>
				<div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" id="address" name="address" value="<?php echo $address;?>">
                </div>
               
                </div>
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			    <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" name="submit" class="btn btn-info">Update Customer Record</button>

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
<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION LAKERS HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                       <li>
                        <a  href="reservation.php"><i class="fa fa-refresh"></i> Reservation</a>
                    </li>
                     <li>
                        <a  href="#"><i class="fa fa-print"></i> Print Reservation</a>
                    </li>
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION INVOICE<small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            BOOKING INVOICE
                        </div>
                        <div class="panel-body">
						<form name="form" action="printbooking.php" method="post">
                      
							  <div class="form-group">
                                            <label>Print Invoice</label>
                                            <input name="code" class="form-control">
                                            
                               </div>
					       <input type="submit" name="submit" value="PRINT INVOICE" class="btn btn-primary">
                        </div>
                        
                    </div>
                </div>\
              </form>
                
             <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PAYMENT RECEIPT
                        </div>
                        <div class="panel-body">
                         <form name="form" action="print.php" method="get">       
                               <div class="form-group">
                                            <label>Print Payment Receipt</label>
                                            <input name="pid" type ="text" class="form-control">
                                            
                               </div>
                     <input type="submit" value="PRINT RECEIPT" class="btn btn-primary">
                       </div>
                        </div>
                </div>
                
						
						</form>
							
                    </div>
                
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>

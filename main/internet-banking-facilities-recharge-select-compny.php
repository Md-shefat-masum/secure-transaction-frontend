
<?php require_once('./includes/header.php') ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Internet Banking Mobile Recharge > Airtel</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ui Element</li>
                        <li class="breadcrumb-item active">Internet Banking facilities</li>
                    </ol>
                </div>
                <div>
                    <button
                        class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item"> <a class="nav-link " href="internet-banking-home.php"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                <li class="nav-item"> <a class="nav-link active" href="internet-banking-facilities.php" ><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Facilities</span></a> </li>
                                <li class="nav-item"> <a class="nav-link"  href="internet-banking-deposit.php" ><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Deposit</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                        <h4>Money Recharge</h4>
                                        <form class="form-material form-control-line m-t-40" style="">
                                            <div class="form-group has-success">
                                                <label class="form-control-label" for="success">Type :</label>
                                                <select type="text" placeholder="user name" style="" class="form-control form-control-success form-control-line" value="" autofocus> 
                                                    <option value="">Prepaid</option>
                                                    <option value="">Postpaid</option>
                                                </select>
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="form-control-label" for="success">Mobile no :</label>   
                                                <input type="text" placeholder="Mobile no" style="" class=" form-control form-control-success form-control-line" value="" autofocus> 
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="form-control-label" for="success">Amount :</label>   
                                                <input type="number" placeholder="amount" style="" class=" form-control form-control-success form-control-line" value="" autofocus> 
                                            </div>
                                            <button type="submit" class="btn btn-outline-success">Recharge</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
<?php require_once('./includes/footer.php') ?>
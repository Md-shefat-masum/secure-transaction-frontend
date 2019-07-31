
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
                    <h3 class="text-themecolor">Internet Banking facilities</h3>
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
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="internet-banking-facilities-transfer.php" class="btn btn-block btn-outline-success" style="padding: 45px 0px;">Transfer</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="internet-banking-facilities-recharge.php" class="btn btn-block btn-outline-info m-b-40" style="padding: 45px 0px;">Recharge</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="internet-banking-facilities-ministatement.php" class="btn btn-block btn-outline-primary" style="padding: 45px 0px;">Mini Statement</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="internet-banking-facilities-bill-payment.php" class="btn btn-block btn-outline-warning" style="padding: 45px 0px;">Pay Bills</a>
                                            </div>
                                        </div>
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

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
                    <h3 class="text-themecolor">Internet Banking Home</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ui Element</li>
                        <li class="breadcrumb-item active">Internet Banking Home</li>
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
                                <li class="nav-item"> <a class="nav-link active" href="internet-banking-home.php"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="internet-banking-facilities.php" ><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Facilities</span></a> </li>
                                <li class="nav-item"> <a class="nav-link"  href="internet-banking-deposit.php" ><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Deposite</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2" role="tabpanel">
                                    <div class="p-20">
                                        <div class="card card-default">
                                            <div class="card-header">
                                                <div class="card-actions">
                                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                                    <!-- <a class="btn-close" data-action="close"><i class="ti-close"></i></a> -->
                                                </div>
                                                <h4 class="card-title m-b-0">Total Amout of Balance in Each Acount</h4>
                                            </div>
                                            <div class="card-body collapse show">
                                                <div class="table-responsive">
                                                    <table class="table product-overview">
                                                        <thead>
                                                            <tr>
                                                                <th>Account</th>
                                                                <th>Name</th>
                                                                <th>Balance</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>qwert</td>
                                                                <td>Timu</td>
                                                                <td>100000$</td>
                                                            </tr>
                                                            <tr>
                                                                <td>qwert</td>
                                                                <td>mahfuza</td>
                                                                <td>100000$</td>
                                                            </tr>
                                                            <tr>
                                                                <td>qwert</td>
                                                                <td>Urmy</td>
                                                                <td>100000$</td>
                                                            </tr>
                                                            <tr>
                                                                <td>qwert</td>
                                                                <td>Shefat</td>
                                                                <td>100000$</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
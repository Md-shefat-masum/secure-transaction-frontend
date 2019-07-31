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
                    <h3 class="text-themecolor">Ecommerce Products</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Ecommerce home</li>
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
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="ecommerce-home.php">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-all-carts.php">All Carts</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="ecommerce-bill-pay.php">Bill pay</a>
                                            </li>
                                        </ul>
                                        <form class="form-inline my-2 my-lg-0" action="" method="">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row page-titles" style="background:url('../assets/images/background/user-bg.jpg') no-repeat center top">
                    <div class="col-lg-12 text-center">
                        <h1 class="m-t-30">Ecommerce</h1>
                        <h5 class="text-muted m-b-30"><i class="ti-pin"></i>Make your Shopping Easy</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="card-actions">
                                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                    <!-- <a class="btn-close" data-action="close"><i class="ti-close"></i></a> -->
                                </div>
                                <h4 class="card-title m-b-0">All Products</h4>
                            </div>
                            <div class="card-body collapse show">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>124323</td>
                                                <td>
                                                    <img src="../assets/images/gallery/chair.jpg" alt="iMac" width="80">
                                                </td>
                                                <td>Chair</td>
                                                <td>17 peice</td>
                                                <td>
                                                    <span class="label label-success font-weight-100">Avaiable</span>
                                                </td>
                                                <td>
                                                    <a href="ecommerce-view-product.php" class="text-inverse p-r-10" data-toggle="tooltip" title="view product" data-original-title="View product">
                                                        <i class="mdi mdi-shape-plus"></i></a> 
                                                    <a href="javascript:void(0)" class="text-inverse" title="Add to cart" data-toggle="tooltip" data-original-title="Add to cart">
                                                        <i class="mdi mdi-cart-outline"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
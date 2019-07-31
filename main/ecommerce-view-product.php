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
                    <h3 class="text-themecolor">View Product Details</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ui Element</li>
                        <li class="breadcrumb-item active">Draggable Portlet</li>
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
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-home.php">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-all-carts.php">All Carts</a>
                                            </li>
                                            <li class="nav-item">
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
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 col-md-6 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <a href="ecommerce-home.php" class="btn float-right btn-outline-success">Return Home</a>
                            </div>
                            <div><hr> </div>
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/gallery/chair.jpg" class="img-circle" width="150">
                                    <h4 class="card-title m-t-10">Chair</h4>
                                    <h6 class="card-subtitle">Rocking chair</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254 Availabe</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54 piece sold</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div><hr> </div>
                            <div class="card-body"> 
                                <small class="text-muted">Product ID </small>
                                <h4>75631</h4> 
                                <small class="text-muted">name </small>
                                <h4>Chair</h4> 
                                <small class="text-muted">Category </small>
                                <h4>Rocking Chair</h4> 
                                <small class="text-muted p-t-30 db">Cost</small>
                                <h4>1432/-</h4> 
                                <small class="text-muted p-t-30 db">Description</small>
                                <h4>It's a description</h4>
                                <br>
                                <button class="btn btn-outline-success btn-lg w-100">Add To Cart</button>
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
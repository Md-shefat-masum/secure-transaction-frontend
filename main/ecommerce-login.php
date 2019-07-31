<?php require_once('./includes/header.php') ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background:url('https://assets.imgix.net/unsplash/nightsky.jpg');background-repeat: no-repeat; background-size:cover;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Ecommerce Login</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active">Login to Ecommerce</li>
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
            <style>
                .signin{
                    background: transparent;
                    /* background:url('https://assets.imgix.net/unsplash/nightsky.jpg'); */
                    background-size: cover;
                    color: white;
                    background-blend-mode: screen;
                }
                .card{
                    background: rgba(0,0,0,.4);
                    border-radius: 5px;
                }
            </style>
            <div class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-4 m-auto">
                        <div class="card" style="color:white">
                            <div class="card-body signin">
                                <h2 style="color:white">Sign In</h2>
                                <form class="form-material form-control-line m-t-40" style="color:white">
                                    <div class="form-group has-success">
                                        <label class="form-control-label" for="success">User Name :</label>
                                        <input type="text" placeholder="user name" style="color:white" class="form-control form-control-success form-control-line" value="" autofocus> 
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="form-control-label" for="success">User password :</label>   
                                        <input type="password" placeholder="password" style="color:white" class=" form-control form-control-success form-control-line" value="" autofocus> 
                                    </div>
                                    
                                    <button type="submit" class="btn btn-outline-success">Sign In</button>
                                </form>
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
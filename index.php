<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        echo "<script language='javascript'>document.location.href='login.php';</script>";
    } else {
    include 'config/db.php';
    include 'template/header.php';
	include 'template/sidebar.php';
?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i>Beranda</h1>
    </div>
                    
					<!-- Content Row -->
        <center>
       <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
            <div class="">
                <div class="">
                <img src="assets/img/Dishub.png" width="200px height="200px" /> <br>
                <font size="7" <p style="font-weight:900;">Sistem Pendataan Surat Masuk dan Surat Keluar </p></font>
                <font size="6" <p style="font-weight:900;">Dinas Perhubungan Provinsi Lampung</p></font>
                </div>
            </div>
        </div><!-- /.container-fluid -->
       </center>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- sm Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-200 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Surat Masuk</div>
                                                <?php
                                                    $sqlsm = mysqli_query($conn, "SELECT * FROM tb_suratmasuk");
                                                    $ceksm = mysqli_num_rows($sqlsm);
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ceksm ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-download fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- sk Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-200 py-4">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Surat Keluar</div>
                                                <?php
                                                    $sqlsk = mysqli_query($conn, "SELECT * FROM tb_suratkeluar");
                                                    $ceksk = mysqli_num_rows($sqlsk);
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ceksk ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-upload fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
					</div>


<?php 
    }
    include 'template/footer.php';
?>
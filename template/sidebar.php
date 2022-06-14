<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="">
                <img src="assets/img/Dishub.png" width="50px height="60px" /> <br>
        </div>
        <div class="sidebar-brand-text mx-0">   SURAT MASUK KELUAR</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-1">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
	  
	  <?php
	  if($_SESSION['level']=='Admin'){
	  ?>
			
	  <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
	  <li class="nav-item">
        <a class="nav-link" href="instansi.php">
          <i class="fas fa-fw fa-university"></i>
          <span>Data Instansi</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="bidang.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Bidang</span></a>
      </li>
	  
	  <?php } ?>

      <!-- Heading -->
	  <li class="nav-item">
        <a class="nav-link" href="suratmasuk.php">
          <i class="fas fa-fw fa-download"></i>
          <span>Surat Masuk</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="suratkeluar.php">
          <i class="fas fa-fw fa-upload"></i>
          <span>Surat Keluar</span></a>
      </li>
	  
	  
	  <!-- Heading -->
	  <li class="nav-item">
        <a class="nav-link" href="laporansm.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan Surat Masuk</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="laporansk.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan Surat Keluar</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
		  <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn text-primary d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           
			<!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="text-uppercase mr-2 d-none d-lg-inline text-gray-600 small">
					<?=$_SESSION['user']?>
				</span>
                <img class="img-profile rounded-circle" src="assets/img/salsa.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="profil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
		
		<div class="container-fluid">
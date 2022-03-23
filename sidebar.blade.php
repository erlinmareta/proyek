<div style="background-color: cadetblue" class="container-scroller" >
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/food2.png" alt="food" /></a> --}}
     
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              {{-- <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt=""> --}}
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Halaman Admin</h5>
              <span>Aktif</span>
            </div>
          </div>
          
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="body">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          {{-- <span class="menu-title">Dashboard</span> --}}
        {{-- </a>
      </li>
       --}} 
      
      {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Icons</span>
        </a>
      </li> --}}
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('menu')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Tambah Menu Baru</span>
        </a>
      </li>

      <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showmenu')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Tampilkan menu</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showpesanan')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">List pesanan</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('bebas')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">admin</span>
          </a>
        </li>
    </ul>
  </nav>
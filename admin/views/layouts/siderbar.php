<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="./assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hello, <?= isset($_SESSION['user_admin']['ho_ten']) ? htmlspecialchars($_SESSION['user_admin']['ho_ten']) : 'Admin' ?></a>
        </div>
      </div>    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN  ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang Chủ
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN . '?act=danh-muc' ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh Mục Sản Phẩm 
              </p>
            </a>
          </li>  

          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN . '?act=san-pham' ?>" class="nav-link">
              <i class="nav-icon fas fa-solid fa-phone"></i>
              <p>
                Sản Phẩm 
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="<?= BASE_URL_ADMIN . '?act=don-hang' ?>" class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Quản lí tài khoản 
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL_ADMIN . '?act=tai-khoan-quan-tri' ?>" class="nav-link">
                <i class="nav-icon fas fa-regular fa-user"></i>
                <p>Tài Khoản Quản trị</p>
                </a>
                
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL_ADMIN . '?act=tai-khoan-khach-hang' ?>" class="nav-link">
                <i class="nav-icon fas fa-regular fa-user"></i>
                <p>Tài Khoản Khách Hàng</p>
                </a>
                
              </li>
            </ul>
            
          </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
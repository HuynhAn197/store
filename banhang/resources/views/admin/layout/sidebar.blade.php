<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/admin/dist/img/abc_123.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Huỳnh Thanh An</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <!-- category        -->
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Category add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Category list</p>
                </a>
              </li>
              
            </ul>
              <!-- end category -->
             
          </li>
          <li class="nav-item">
             
            <!-- producttype         -->
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                ProductType
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('producttype.create')}}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>ProductType add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('producttype.index')}}" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>ProductType list</p>
                </a>
              </li>
           
            </ul>
            <!-- endproducttype -->
          </li>
         

          </li>
          <li class="nav-item">
             
              <!-- product -->
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Product add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="fa fa-list-alt nav-icon"></i>
                  <p>Product list</p>
                </a>
              </li>
           
            </ul>
            <!-- end product -->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
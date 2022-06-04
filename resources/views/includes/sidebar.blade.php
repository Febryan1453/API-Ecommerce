<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://scontent.fcgk6-2.fna.fbcdn.net/v/t1.6435-1/p148x148/88273873_10158413441999734_6065777235489456128_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=1eb0c7&_nc_eui2=AeHOezpYJ6Oe4LNYk82YP70SNAywz7zjnkw0DLDPvOOeTJKkXZZUFSJ2B_tSsK7TLFzDmi9sf_zSLOMHKufDNCPr&_nc_ohc=ZwhfzAyNe9gAX-e6wJx&tn=o5ohADsdeuQVnp3B&_nc_ht=scontent.fcgk6-2.fna&oh=71555ad73553f30cedc7f8c5eae35788&oe=60F3C056" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-Commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('produk.index')}}" class="nav-link">
                <i class="nav-icon fas fa-store"></i>
              <p>
                Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lainnya</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

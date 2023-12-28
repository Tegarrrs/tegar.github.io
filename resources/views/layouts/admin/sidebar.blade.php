        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-2">{{ auth()->user()->name }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider  my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Dashboard</span></a>
            </li>

            <!-- Nav Item - User -->
            <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin/user.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">User</span></a>
            </li>

            <!-- Nav Item - Event -->
            <li class="nav-item {{ Request::is('admin/event*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin/event.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Event</span></a>
            </li>

            <!-- Nav Item - Category -->
            <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin/category.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="">Category</span></a>
            </li>

            <!-- Nav Item - Tables -->






            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

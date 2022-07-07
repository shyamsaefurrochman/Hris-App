<nav id="sidebar" class="sidebar-wrapper sidebar-primary">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{ asset('storage/assets/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
                <img src="{{ asset('storage/assets/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                    <img src="{{ asset('storage/assets/images/logo-light.png') }}" height="24" alt="">
                </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard.index') }}"><i class="ti ti-home me-2"></i>Dashboard</a></li>
            <li><a href="{{ route('pegawai.index') }}"><i class="ti ti-user me-2"></i>Pegawai</a></li>
            <li><a href="#"><i class="ti ti-list me-2"></i>List Kehadiran</a>
            </li>
            <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <!-- Sidebar Footer -->
</nav>
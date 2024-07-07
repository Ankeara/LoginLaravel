<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">LIT CODER</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LIT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i>
                    <span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-reset-password.html">Logout</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i>
                    <span>Errors</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="errors-503.html">503</a></li>
                    <li><a class="nav-link" href="errors-403.html">403</a></li>
                    <li><a class="nav-link" href="errors-404.html">404</a></li>
                    <li><a class="nav-link" href="errors-500.html">500</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i>
                    <span>Credits</span></a></li>
        </ul>
    </aside>
</div>

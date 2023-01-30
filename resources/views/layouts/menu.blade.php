<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="btn btn-danger btn-flat float-right"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Sign out
    </a>
</li>

<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('company.index')}}" class="nav-link">
        <i class="nav-icon fas fa-address-card"></i>
        <p>Company</p>
        {{-- <i class="nav-icon fas fa-arrow-alt-circle-right"></i> --}}
    </a>
</li>
<li class="nav-item">
    <a href="#" class=" bg-danger nav-link"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-door-open"></i>
        <p>LogOut</p>
        <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
    </a>
</li>

<div class="sidebar">
    <div class="app-title">WEB AUFA</div>

    <div class="sidebar-header">
        <img src="{{ asset('images/icon.jpg') }}" alt="">
        <div class="name-tag">
            <div class="name">AUFA</div>
            <div class="status">Admin</div>
        </div>
    </div>

    <div class="sidebar-menu-tag">Menu</div>
    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="sidebar-menu-item">
                    <i class="fas fa-desktop sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category') }}" class="sidebar-menu-item">
                    <i class="fas fa-user-friends sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Category</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.post') }}" class="sidebar-menu-item">
                    <i class="fas fa-user-friends sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Post</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.photo') }}" class="sidebar-menu-item">
                    <i class="fas fa-user-friends sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Photo</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.album') }}" class="sidebar-menu-item">
                    <i class="fas fa-user-friends sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Album</div>
                </a>
            </li>
        </ul>
    </div>
</div>
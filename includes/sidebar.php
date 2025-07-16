<div class="sidebar">
    <div class="sidebar-header">
        <h4 class="fw-bold text-white mb-0">Admin Panel</h4>
    </div>
    
    <nav class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo $currentPage === 'dashboard' ? 'active' : ''; ?>" href="?page=dashboard">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $currentPage === 'users' ? 'active' : ''; ?>" href="?page=users">
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $currentPage === 'analytics' ? 'active' : ''; ?>" href="?page=analytics">
                    <i class="bi bi-graph-up"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $currentPage === 'settings' ? 'active' : ''; ?>" href="?page=settings">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <div class="sidebar-footer">
        <div class="user-info">
            <div class="user-avatar">
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="user-details">
                <div class="user-name"><?php echo $_SESSION['username'] ?? 'Admin'; ?></div>
                <div class="user-email"><?php echo $_SESSION['email'] ?? 'admin@example.com'; ?></div>
            </div>
        </div>
        <a href="logout.php" class="btn btn-outline-light btn-sm w-100 mt-3">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>
</div>
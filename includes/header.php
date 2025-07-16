<header class="top-header">
    <div class="header-content">
        <div class="header-left">
            <button class="btn btn-link sidebar-toggle d-lg-none" type="button">
                <i class="bi bi-list"></i>
            </button>
            <h1 class="page-title mb-0">
                <?php
                switch($currentPage) {
                    case 'users':
                        echo 'Users';
                        break;
                    case 'analytics':
                        echo 'Analytics';
                        break;
                    case 'settings':
                        echo 'Settings';
                        break;
                    default:
                        echo 'Dashboard';
                        break;
                }
                ?>
            </h1>
        </div>
        
        <div class="header-right">
            <div class="search-box">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Search...">
                </div>
            </div>
            
            <div class="header-actions">
                <button class="btn btn-link position-relative" type="button">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </button>
                
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <div class="user-avatar-small">
                            <i class="bi bi-person-circle"></i>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><h6 class="dropdown-header"><?php echo $_SESSION['username'] ?? 'Admin'; ?></h6></li>
                        <li><a class="dropdown-item" href="?page=settings"><i class="bi bi-gear me-2"></i>Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
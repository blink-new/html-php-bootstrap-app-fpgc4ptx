<?php
session_start();

// If already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$error = '';

// Handle login form submission
if ($_POST) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Simple authentication (in real app, use proper password hashing)
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = 'admin';
        $_SESSION['email'] = 'admin@example.com';
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="login-page">
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Left Side - Branding -->
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-primary">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bold mb-4">Admin Panel</h1>
                    <p class="lead">Manage your application with our beautiful, Stripe-inspired interface</p>
                </div>
            </div>
            
            <!-- Right Side - Login Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="login-form-container">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold text-dark">Welcome back</h2>
                        <p class="text-muted">Sign in to your account</p>
                    </div>
                    
                    <?php if ($error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="login-form">
                        <div class="mb-4">
                            <label for="username" class="form-label fw-medium">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label fw-medium">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label text-muted" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-4">Sign In</button>
                        
                        <div class="text-center">
                            <small class="text-muted">
                                Demo credentials: <strong>admin</strong> / <strong>admin123</strong>
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
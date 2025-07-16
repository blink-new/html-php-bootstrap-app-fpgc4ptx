<div class="container-fluid">
    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Total Users</h6>
                            <h2 class="card-title mb-0 fw-bold">2,847</h2>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> +12.5% from last month
                            </small>
                        </div>
                        <div class="stats-icon bg-primary">
                            <i class="bi bi-people text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Revenue</h6>
                            <h2 class="card-title mb-0 fw-bold">$45,210</h2>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> +8.2% from last month
                            </small>
                        </div>
                        <div class="stats-icon bg-success">
                            <i class="bi bi-currency-dollar text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Orders</h6>
                            <h2 class="card-title mb-0 fw-bold">1,234</h2>
                            <small class="text-danger">
                                <i class="bi bi-arrow-down"></i> -2.1% from last month
                            </small>
                        </div>
                        <div class="stats-icon bg-warning">
                            <i class="bi bi-cart text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Conversion Rate</h6>
                            <h2 class="card-title mb-0 fw-bold">3.24%</h2>
                            <small class="text-success">
                                <i class="bi bi-arrow-up"></i> +0.5% from last month
                            </small>
                        </div>
                        <div class="stats-icon bg-info">
                            <i class="bi bi-graph-up text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Charts Row -->
    <div class="row mb-4">
        <div class="col-xl-8 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Revenue Overview</h5>
                </div>
                <div class="card-body">
                    <canvas id="revenueChart" height="100"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Traffic Sources</h5>
                </div>
                <div class="card-body">
                    <canvas id="trafficChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="row">
        <div class="col-xl-8 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Recent Orders</h5>
                    <a href="?page=orders" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-medium">#ORD-001</span></td>
                                    <td>John Doe</td>
                                    <td>$299.00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-01-15</td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">#ORD-002</span></td>
                                    <td>Jane Smith</td>
                                    <td>$149.50</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>2024-01-15</td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">#ORD-003</span></td>
                                    <td>Mike Johnson</td>
                                    <td>$89.99</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>2024-01-14</td>
                                </tr>
                                <tr>
                                    <td><span class="fw-medium">#ORD-004</span></td>
                                    <td>Sarah Wilson</td>
                                    <td>$199.00</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td>2024-01-14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-plus-circle me-2"></i>Add New User
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                            <i class="bi bi-download me-2"></i>Export Data
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                            <i class="bi bi-gear me-2"></i>System Settings
                        </button>
                        <button class="btn btn-outline-primary" type="button">
                            <i class="bi bi-envelope me-2"></i>Send Newsletter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
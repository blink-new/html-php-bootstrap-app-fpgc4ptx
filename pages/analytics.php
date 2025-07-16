<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted mb-0">Track your application performance and user behavior</p>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active">Last 7 days</button>
                    <button type="button" class="btn btn-outline-primary">Last 30 days</button>
                    <button type="button" class="btn btn-outline-primary">Last 90 days</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Key Metrics -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card analytics-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Page Views</h6>
                            <h2 class="card-title mb-1 fw-bold">24,567</h2>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-success-subtle text-success me-2">
                                    <i class="bi bi-arrow-up"></i> 15.3%
                                </span>
                                <small class="text-muted">vs last period</small>
                            </div>
                        </div>
                        <div class="analytics-icon bg-primary">
                            <i class="bi bi-eye text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card analytics-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Unique Visitors</h6>
                            <h2 class="card-title mb-1 fw-bold">8,942</h2>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-success-subtle text-success me-2">
                                    <i class="bi bi-arrow-up"></i> 8.7%
                                </span>
                                <small class="text-muted">vs last period</small>
                            </div>
                        </div>
                        <div class="analytics-icon bg-success">
                            <i class="bi bi-people text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card analytics-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Bounce Rate</h6>
                            <h2 class="card-title mb-1 fw-bold">32.4%</h2>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-danger-subtle text-danger me-2">
                                    <i class="bi bi-arrow-down"></i> 2.1%
                                </span>
                                <small class="text-muted">vs last period</small>
                            </div>
                        </div>
                        <div class="analytics-icon bg-warning">
                            <i class="bi bi-graph-down text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card analytics-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="card-subtitle mb-2 text-muted">Avg. Session</h6>
                            <h2 class="card-title mb-1 fw-bold">4m 32s</h2>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-success-subtle text-success me-2">
                                    <i class="bi bi-arrow-up"></i> 12.5%
                                </span>
                                <small class="text-muted">vs last period</small>
                            </div>
                        </div>
                        <div class="analytics-icon bg-info">
                            <i class="bi bi-clock text-white"></i>
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Traffic Overview</h5>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-outline-secondary active">Views</button>
                        <button type="button" class="btn btn-outline-secondary">Visitors</button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="trafficOverviewChart" height="100"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Device Types</h5>
                </div>
                <div class="card-body">
                    <canvas id="deviceChart"></canvas>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <div class="legend-color bg-primary me-2"></div>
                                <span>Desktop</span>
                            </div>
                            <span class="fw-medium">64.2%</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <div class="legend-color bg-success me-2"></div>
                                <span>Mobile</span>
                            </div>
                            <span class="fw-medium">28.7%</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="legend-color bg-warning me-2"></div>
                                <span>Tablet</span>
                            </div>
                            <span class="fw-medium">7.1%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Additional Analytics -->
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Top Pages</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Views</th>
                                    <th>Unique</th>
                                    <th>Bounce Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="fw-medium">/dashboard</div>
                                        <small class="text-muted">Dashboard</small>
                                    </td>
                                    <td>8,542</td>
                                    <td>3,241</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">24.3%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="fw-medium">/users</div>
                                        <small class="text-muted">User Management</small>
                                    </td>
                                    <td>5,234</td>
                                    <td>2,156</td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-warning">35.7%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="fw-medium">/analytics</div>
                                        <small class="text-muted">Analytics</small>
                                    </td>
                                    <td>3,891</td>
                                    <td>1,847</td>
                                    <td>
                                        <span class="badge bg-success-subtle text-success">28.9%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="fw-medium">/settings</div>
                                        <small class="text-muted">Settings</small>
                                    </td>
                                    <td>2,156</td>
                                    <td>1,234</td>
                                    <td>
                                        <span class="badge bg-danger-subtle text-danger">45.2%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Traffic Sources</h5>
                </div>
                <div class="card-body">
                    <div class="source-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-google text-danger me-2"></i>
                                <span>Google Search</span>
                            </div>
                            <span class="fw-medium">42.3%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-danger" style="width: 42.3%"></div>
                        </div>
                    </div>
                    
                    <div class="source-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-link-45deg text-primary me-2"></i>
                                <span>Direct</span>
                            </div>
                            <span class="fw-medium">28.7%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" style="width: 28.7%"></div>
                        </div>
                    </div>
                    
                    <div class="source-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-facebook text-primary me-2"></i>
                                <span>Facebook</span>
                            </div>
                            <span class="fw-medium">15.2%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar" style="width: 15.2%; background-color: #1877f2;"></div>
                        </div>
                    </div>
                    
                    <div class="source-item mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-twitter text-info me-2"></i>
                                <span>Twitter</span>
                            </div>
                            <span class="fw-medium">8.9%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-info" style="width: 8.9%"></div>
                        </div>
                    </div>
                    
                    <div class="source-item">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-three-dots text-muted me-2"></i>
                                <span>Others</span>
                            </div>
                            <span class="fw-medium">4.9%</span>
                        </div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-secondary" style="width: 4.9%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
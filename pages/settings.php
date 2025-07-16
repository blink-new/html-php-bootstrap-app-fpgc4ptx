<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <p class="text-muted mb-0">Manage your application settings and preferences</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-3 col-lg-4 mb-4">
            <!-- Settings Navigation -->
            <div class="card">
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <a href="#general" class="list-group-item list-group-item-action active" data-bs-toggle="pill">
                            <i class="bi bi-gear me-2"></i>General
                        </a>
                        <a href="#security" class="list-group-item list-group-item-action" data-bs-toggle="pill">
                            <i class="bi bi-shield-lock me-2"></i>Security
                        </a>
                        <a href="#notifications" class="list-group-item list-group-item-action" data-bs-toggle="pill">
                            <i class="bi bi-bell me-2"></i>Notifications
                        </a>
                        <a href="#integrations" class="list-group-item list-group-item-action" data-bs-toggle="pill">
                            <i class="bi bi-puzzle me-2"></i>Integrations
                        </a>
                        <a href="#billing" class="list-group-item list-group-item-action" data-bs-toggle="pill">
                            <i class="bi bi-credit-card me-2"></i>Billing
                        </a>
                        <a href="#advanced" class="list-group-item list-group-item-action" data-bs-toggle="pill">
                            <i class="bi bi-sliders me-2"></i>Advanced
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-9 col-lg-8">
            <div class="tab-content">
                <!-- General Settings -->
                <div class="tab-pane fade show active" id="general">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">General Settings</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="siteName" class="form-label">Site Name</label>
                                        <input type="text" class="form-control" id="siteName" value="Admin Panel">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="siteUrl" class="form-label">Site URL</label>
                                        <input type="url" class="form-control" id="siteUrl" value="https://admin.example.com">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="siteDescription" class="form-label">Site Description</label>
                                    <textarea class="form-control" id="siteDescription" rows="3">A modern admin panel built with Bootstrap and PHP</textarea>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="timezone" class="form-label">Timezone</label>
                                        <select class="form-select" id="timezone">
                                            <option value="UTC">UTC</option>
                                            <option value="America/New_York">Eastern Time</option>
                                            <option value="America/Chicago">Central Time</option>
                                            <option value="America/Denver">Mountain Time</option>
                                            <option value="America/Los_Angeles" selected>Pacific Time</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="language" class="form-label">Language</label>
                                        <select class="form-select" id="language">
                                            <option value="en" selected>English</option>
                                            <option value="es">Spanish</option>
                                            <option value="fr">French</option>
                                            <option value="de">German</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Security Settings -->
                <div class="tab-pane fade" id="security">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Security Settings</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Password Requirements</h6>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="requireUppercase" checked>
                                        <label class="form-check-label" for="requireUppercase">
                                            Require uppercase letters
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="requireNumbers" checked>
                                        <label class="form-check-label" for="requireNumbers">
                                            Require numbers
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="requireSpecial">
                                        <label class="form-check-label" for="requireSpecial">
                                            Require special characters
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="minPasswordLength" class="form-label">Minimum Password Length</label>
                                        <input type="number" class="form-control" id="minPasswordLength" value="8" min="6" max="20">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sessionTimeout" class="form-label">Session Timeout (minutes)</label>
                                        <input type="number" class="form-control" id="sessionTimeout" value="30" min="5" max="480">
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Two-Factor Authentication</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="enable2FA">
                                        <label class="form-check-label" for="enable2FA">
                                            Enable Two-Factor Authentication
                                        </label>
                                    </div>
                                    <small class="text-muted">Require users to verify their identity with a second factor</small>
                                </div>
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Security Settings</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Notifications Settings -->
                <div class="tab-pane fade" id="notifications">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Notification Settings</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Email Notifications</h6>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="emailNewUsers" checked>
                                        <label class="form-check-label" for="emailNewUsers">
                                            New user registrations
                                        </label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="emailSystemAlerts" checked>
                                        <label class="form-check-label" for="emailSystemAlerts">
                                            System alerts and errors
                                        </label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="emailWeeklyReports">
                                        <label class="form-check-label" for="emailWeeklyReports">
                                            Weekly analytics reports
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="adminEmail" class="form-label">Admin Email</label>
                                        <input type="email" class="form-control" id="adminEmail" value="admin@example.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fromEmail" class="form-label">From Email</label>
                                        <input type="email" class="form-control" id="fromEmail" value="noreply@example.com">
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Push Notifications</h6>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="pushEnabled" checked>
                                        <label class="form-check-label" for="pushEnabled">
                                            Enable push notifications
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Notification Settings</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Integrations Settings -->
                <div class="tab-pane fade" id="integrations">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Integrations</h5>
                        </div>
                        <div class="card-body">
                            <div class="integration-item mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="integration-icon bg-primary me-3">
                                            <i class="bi bi-google text-white"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Google Analytics</h6>
                                            <small class="text-muted">Track website analytics and user behavior</small>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="googleAnalytics" checked>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="integration-item mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="integration-icon bg-info me-3">
                                            <i class="bi bi-slack text-white"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Slack</h6>
                                            <small class="text-muted">Send notifications to Slack channels</small>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="slackIntegration">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="integration-item mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="integration-icon bg-success me-3">
                                            <i class="bi bi-envelope text-white"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">SendGrid</h6>
                                            <small class="text-muted">Email delivery service</small>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="sendgridIntegration" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Billing Settings -->
                <div class="tab-pane fade" id="billing">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Billing & Subscription</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Current Plan</h6>
                                            <h3 class="text-primary">Pro Plan</h3>
                                            <p class="text-muted">$29/month</p>
                                            <button class="btn btn-outline-primary btn-sm">Change Plan</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Next Billing</h6>
                                            <h3 class="text-dark">Feb 15, 2024</h3>
                                            <p class="text-muted">Auto-renewal enabled</p>
                                            <button class="btn btn-outline-secondary btn-sm">Manage</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="fw-medium mb-3">Payment Method</h6>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-credit-card text-primary me-3"></i>
                                                <div>
                                                    <div class="fw-medium">•••• •••• •••• 4242</div>
                                                    <small class="text-muted">Expires 12/25</small>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary btn-sm">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="fw-medium mb-3">Billing History</h6>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jan 15, 2024</td>
                                                <td>Pro Plan - Monthly</td>
                                                <td>$29.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-secondary">Download</a></td>
                                            </tr>
                                            <tr>
                                                <td>Dec 15, 2023</td>
                                                <td>Pro Plan - Monthly</td>
                                                <td>$29.00</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td><a href="#" class="btn btn-sm btn-outline-secondary">Download</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Advanced Settings -->
                <div class="tab-pane fade" id="advanced">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Advanced Settings</h5>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-warning">
                                <i class="bi bi-exclamation-triangle me-2"></i>
                                <strong>Warning:</strong> These settings can affect system performance and security. Only modify if you know what you're doing.
                            </div>
                            
                            <form>
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Database Settings</h6>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dbHost" class="form-label">Database Host</label>
                                            <input type="text" class="form-control" id="dbHost" value="localhost">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbPort" class="form-label">Database Port</label>
                                            <input type="number" class="form-control" id="dbPort" value="3306">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Cache Settings</h6>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="enableCache" checked>
                                        <label class="form-check-label" for="enableCache">
                                            Enable caching
                                        </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="cacheTimeout" class="form-label">Cache Timeout (seconds)</label>
                                            <input type="number" class="form-control" id="cacheTimeout" value="3600">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <h6 class="fw-medium mb-3">Debug Mode</h6>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="debugMode">
                                        <label class="form-check-label" for="debugMode">
                                            Enable debug mode
                                        </label>
                                    </div>
                                    <small class="text-muted">Shows detailed error messages and logs</small>
                                </div>
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Save Advanced Settings</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
// Stripe-Inspired Admin Panel JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize charts
    initializeCharts();
    
    // Initialize sidebar toggle for mobile
    initializeSidebarToggle();
    
    // Initialize form interactions
    initializeFormInteractions();
});

// Chart initialization
function initializeCharts() {
    // Revenue Chart (Dashboard)
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Revenue',
                    data: [12000, 19000, 15000, 25000, 22000, 30000, 28000],
                    borderColor: '#635BFF',
                    backgroundColor: 'rgba(99, 91, 255, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#F3F4F6'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
    
    // Traffic Sources Chart (Dashboard)
    const trafficCtx = document.getElementById('trafficChart');
    if (trafficCtx) {
        new Chart(trafficCtx, {
            type: 'doughnut',
            data: {
                labels: ['Direct', 'Google', 'Social', 'Email'],
                datasets: [{
                    data: [35, 40, 15, 10],
                    backgroundColor: [
                        '#635BFF',
                        '#00D924',
                        '#FF6B6B',
                        '#4ECDC4'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true
                        }
                    }
                }
            }
        });
    }
    
    // Traffic Overview Chart (Analytics)
    const trafficOverviewCtx = document.getElementById('trafficOverviewChart');
    if (trafficOverviewCtx) {
        new Chart(trafficOverviewCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Page Views',
                    data: [3200, 4100, 3800, 5200, 4900, 3600, 4200],
                    borderColor: '#635BFF',
                    backgroundColor: 'rgba(99, 91, 255, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Unique Visitors',
                    data: [1800, 2300, 2100, 2900, 2700, 2000, 2400],
                    borderColor: '#00D924',
                    backgroundColor: 'rgba(0, 217, 36, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            padding: 20
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#F3F4F6'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
    
    // Device Chart (Analytics)
    const deviceCtx = document.getElementById('deviceChart');
    if (deviceCtx) {
        new Chart(deviceCtx, {
            type: 'doughnut',
            data: {
                labels: ['Desktop', 'Mobile', 'Tablet'],
                datasets: [{
                    data: [64.2, 28.7, 7.1],
                    backgroundColor: [
                        '#635BFF',
                        '#00D924',
                        '#FFC107'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    }
}

// Sidebar toggle for mobile
function initializeSidebarToggle() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 991.98) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.remove('show');
                }
            }
        });
    }
}

// Form interactions
function initializeFormInteractions() {
    // Select all checkbox functionality
    const selectAllCheckbox = document.getElementById('selectAll');
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody .form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    }
    
    // Add smooth transitions to form controls
    const formControls = document.querySelectorAll('.form-control, .form-select');
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        control.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    // Add loading states to buttons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.type === 'submit') {
                this.classList.add('loading');
                this.disabled = true;
                
                // Re-enable after 2 seconds (for demo purposes)
                setTimeout(() => {
                    this.classList.remove('loading');
                    this.disabled = false;
                }, 2000);
            }
        });
    });
}

// Utility functions
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentElement) {
            notification.remove();
        }
    }, 5000);
}

// Add some demo functionality
document.addEventListener('DOMContentLoaded', function() {
    // Demo: Add user button
    const addUserButtons = document.querySelectorAll('[data-bs-target="#addUserModal"]');
    addUserButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('Add user modal triggered');
        });
    });
    
    // Demo: Quick action buttons
    const quickActionButtons = document.querySelectorAll('.btn[type="button"]');
    quickActionButtons.forEach(button => {
        if (button.textContent.includes('Add New User') || 
            button.textContent.includes('Export Data') || 
            button.textContent.includes('System Settings') || 
            button.textContent.includes('Send Newsletter')) {
            button.addEventListener('click', function() {
                showNotification(`${this.textContent.trim()} action triggered!`, 'info');
            });
        }
    });
    
    // Demo: Settings form submissions
    const settingsForms = document.querySelectorAll('#general form, #security form, #notifications form, #advanced form');
    settingsForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            showNotification('Settings saved successfully!', 'success');
        });
    });
});

// Add CSS for loading state
const style = document.createElement('style');
style.textContent = `
    .btn.loading {
        position: relative;
        color: transparent !important;
    }
    
    .btn.loading::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: 50%;
        left: 50%;
        margin-left: -8px;
        margin-top: -8px;
        border: 2px solid transparent;
        border-top-color: currentColor;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        color: white;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .focused {
        transform: scale(1.02);
        transition: transform 0.2s ease;
    }
`;
document.head.appendChild(style);
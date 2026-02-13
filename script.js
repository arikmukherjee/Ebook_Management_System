// Ebook Library JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize event listeners
    initializeEventListeners();
    displayMessages();
});

/**
 * Initialize event listeners for form submissions
 */
function initializeEventListeners() {
    const uploadForm = document.querySelector('.upload-form');
    if (uploadForm) {
        uploadForm.addEventListener('submit', validateUploadForm);
    }
}

/**
 * Validate upload form before submission
 */
function validateUploadForm(event) {
    const title = document.getElementById('title')?.value.trim() || '';
    const author = document.getElementById('author')?.value.trim() || '';
    const pdfFile = document.getElementById('pdf_file')?.files[0];

    if (!title) {
        event.preventDefault();
        alert('Please enter a book title.');
        return false;
    }

    if (!author) {
        event.preventDefault();
        alert('Please enter the author name.');
        return false;
    }

    if (!pdfFile) {
        event.preventDefault();
        alert('Please select a PDF file.');
        return false;
    }

    if (pdfFile.type !== 'application/pdf') {
        event.preventDefault();
        alert('Only PDF files are allowed.');
        return false;
    }

    if (pdfFile.size > 50 * 1024 * 1024) { // 50MB limit
        event.preventDefault();
        alert('File size must be less than 50MB.');
        return false;
    }

    return true;
}

/**
 * Display success/error messages from session
 */
function displayMessages() {
    // Check for success or error messages in the page
    const successMsg = document.querySelector('[data-success]');
    const errorMsg = document.querySelector('[data-error]');

    if (successMsg) {
        showNotification(successMsg.getAttribute('data-success'), 'success');
    }

    if (errorMsg) {
        showNotification(errorMsg.getAttribute('data-error'), 'error');
    }
}

/**
 * Show notification message
 */
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        background-color: ${type === 'success' ? '#27ae60' : type === 'error' ? '#e74c3c' : '#3498db'};
        color: white;
        border-radius: 4px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        animation: slideIn 0.3s ease;
    `;

    document.body.appendChild(notification);

    // Auto-remove notification after 4 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 4000);
}

// Add CSS animations for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

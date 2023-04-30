const DEFAULT_PASSWORD = '12345678';

// Get the login form and password input
const loginForm = document.getElementById('login-form');
const passwordInput = document.getElementById('password');

// Add an event listener for the login form submission
loginForm.addEventListener('submit', function(event) {
    event.preventDefault();

    // Get the entered password
    const enteredPassword = passwordInput.value;

    // Check if the entered password matches the default password
    if (enteredPassword === DEFAULT_PASSWORD) {
        // Redirect to the admin page
        window.location.replace('admin.php');
    } else {
        // Show an error message
        document.getElementById('password-error').innerHTML = 'Incorrect password';
    }
});

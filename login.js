
  // Function to handle form submission
  function handleFormSubmission() {
    var loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from being submitted
  
      var passwordInput = document.getElementById('passwordInput');
      var password = passwordInput.value;
  
      // Authenticate with Firebase using the provided password
      firebase.auth().signInWithEmailAndPassword('admin@example.com', password)
        .then(function(userCredential) {
          // Authentication successful, redirect to admin page
          window.location.href = 'admin.php';
        })
        .catch(function(error) {
          // Handle authentication error
          console.error(error);
          alert('Invalid password');
        });
    });
  }
  
  // Call the functions
  initializeFirebase();
  handleFormSubmission();
  



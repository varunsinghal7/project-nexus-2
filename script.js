// script.js
function validateLoginForm() {
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;
    var errorElement = document.getElementById("loginError");
  
    // Reset error message
    errorElement.textContent = "";
  
    // Check if username is empty
    if (username.trim() === "") {
      errorElement.textContent = "Username cannot be empty";
      return false;
    }
  
    // Check if password is empty
    if (password.trim() === "") {
      errorElement.textContent = "Password cannot be empty";
      return false;
    }
  
    // Validation passed
    return true;
  }
  
  function validateSignupForm() {
    var username = document.getElementById("signupUsername").value;
    var password = document.getElementById("signupPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var errorElement = document.getElementById("signupError");
  
    // Reset error message
    errorElement.textContent = "";
  
    // Check if username is empty
    if (username.trim() === "") {
      errorElement.textContent = "Username cannot be empty";
      return false;
    }
  
    // Check if password is at least 8 characters and includes letters and numbers
    if (password.length < 8 || !(/[a-zA-Z]/.test(password)) || !(/\d/.test(password))) {
      errorElement.textContent = "Password must be at least 8 characters and include letters and numbers";
      return false;
    }
  
    // Check if confirm password matches
    if (password !== confirmPassword) {
      errorElement.textContent = "Passwords do not match";
      return false;
    }
  
    // Validation passed
    return true;
  }
  
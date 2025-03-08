document.addEventListener("DOMContentLoaded", function () {
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirm-password");
    const submitButton = document.getElementById("submitBtn");

    const usernameError = document.getElementById("username-error");
    const passwordError = document.getElementById("password-error");
    const confirmPasswordError = document.getElementById("confirm-password-error");

    function validateUsername() {
        const username = usernameInput.value.trim();
        if (username.length < 8) {
            usernameError.textContent = "Username must be at least 8 characters long.";
            return false;
        } else {
            usernameError.textContent = "";
            return true;
        }
    }

    function validatePassword() {
        const password = passwordInput.value;
        const hasLowercase = /[a-z]/.test(password);
        const hasUppercase = /[A-Z]/.test(password);
        const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

        if (!hasLowercase || !hasUppercase || !hasSpecialChar) {
            passwordError.textContent = "Password must contain at least one lowercase, one uppercase, and one special character.";
            return false;
        } else {
            passwordError.textContent = "";
            return true;
        }
    }

    function validateConfirmPassword() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            confirmPasswordError.textContent = "Passwords do not match.";
            return false;
        } else {
            confirmPasswordError.textContent = "";
            return true;
        }
    }

    usernameInput.addEventListener("input", validateUsername);
    passwordInput.addEventListener("input", validatePassword);
    confirmPasswordInput.addEventListener("input", validateConfirmPassword);

    document.getElementById("signupForm").addEventListener("submit", function (event) {
        if (!validateUsername() || !validatePassword() || !validateConfirmPassword()) {
            event.preventDefault(); 
        }
    });
});

function checkPasswordStrength() {
    var password = document.getElementById("password").value;
    var strengthBar = document.getElementById("password-strength");

    let strength = 0;
    if (password.length > 5) strength++;
    if (password.match(/[a-z]+/)) strength++;
    if (password.match(/[A-Z]+/)) strength++;
    if (password.match(/[0-9]+/)) strength++;
    if (password.match(/[$@#&!]+/)) strength++;

    let strengthText = ["Weak", "Fair", "Good", "Strong", "Very Strong"];
    let colors = ["red", "orange", "yellow", "blue", "green"];

    strengthBar.innerHTML = `<p style="color: ${colors[strength]};">${strengthText[strength]}</p>`;
}

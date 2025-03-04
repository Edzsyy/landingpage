<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Login</title>
</head>
<body>
    <style>/* Basic Reset and Body Styles *//* Basic Reset and Body Styles */
body {
    font-family: "Inter", sans-serif;
    background-color: var(--light);
    /* Use your light variable */
    color: #040505;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* Ensure full viewport height */
}

/* Container for the Form */
.container {
    width: 100%;
    max-width: 450px;
    /* Limit width for better readability */
    padding: 30px;
    background-color: var(--primary);
    /* Changed background to primary */
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* Form Specific Styles */
.form {
    width: 100%;
}

.form-content {
    padding: 20px;
}

.form-content header {
    font-size: 2rem;
    font-weight: 600;
    color: var(--light);
    /* Changed to light text */
    text-align: center;
    margin-bottom: 20px;
}

/* Input Group Styling */
.input-group {
    position: relative;
    margin-bottom: 20px;
}

.input-group input {
    width: 100%;
    padding: 15px;
    font-size: 1rem;
    border: 2px solid #ddd;
    border-radius: 8px;
    outline: none;
    transition: border-color 0.3s ease;
}

.input-group input:focus {
    border-color: var(--indigo);
    /* Changed */
    /* or use your defined --primary color */
}

/* Eye Icon Styling */
.eye-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: var(--dark);
    /* Changed */
    transition: color 0.3s ease;
}

.eye-icon:hover {
    color: var(--indigo);
    /* Changed */
}

/* Form Link Styling */
.form-link {
    margin-bottom: 20px;
    font-size: 0.9rem;
    text-align: right;
    color: var(--light);
    /* Changed */
}

.form-link a {
  color: var(--white); /* Set initial color to light */
  text-decoration: none;
  transition: color 0.3s ease;
}

/* Hover and Active States for Links */
.form-link a:hover,
.form-link a:active {
  color: #f0f0f0; /* Change to a lighter color on hover and active states */
  text-decoration: underline;
}

.forgot-password,
.signup-link {
    color: var(--light);
    /* Changed */
    text-decoration: none;
    transition: color 0.3s ease;
}

.forgot-password:hover,
.signup-link:hover {
    text-decoration: underline;
    color: #4e8aff;
    /* Changed */
}

/* Button Styling */
.button {
    margin-bottom: 20px;
}

.btn {
    width: 100%;
    padding: 15px;
    font-size: 1.1rem;
    color: var(--light);
    background-color: #0052f4;
    /*Changed, used var primary*/
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: var(--indigo);
    /* Changed */
}

/* Line Styling */
.line {
    width: 100%;
    height: 1px;
    background-color: #ddd;
    margin-bottom: 20px;
}

/* Media Option Styling */
.media-option {
    display: flex;
    justify-content: space-around;
}

.facebook-link,
.google-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: white;
    transition: background-color 0.3s ease;
}

.facebook-link {
    background-color: #3b5998;
    /* Facebook Blue */
}

.facebook-link:hover {
    background-color: #314773;
    /* Darker Facebook Blue */
}

.google-link {
    background-color: #dd4b39;
    /* Google Red */
}

.google-link:hover {
    background-color: #c23321;
    /* Darker Google Red */
}

/* Icon Styling in Media Option */
.facebook-icon,
.google-icon {
    font-size: 1.5rem;
}

/* Responsive adjustments (optional) */
@media (max-width: 576px) {
    .container {
        padding: 20px;
    }

    .form-content header {
        font-size: 1.8rem;
    }

    .input-group input {
        padding: 12px;
        font-size: 0.9rem;
    }

    .btn {
        padding: 12px;
        font-size: 1rem;
    }
}
</style>
    <section class="container">
        <div class="form">
            <!-- <?php include('message.php'); ?> -->
            <div class="form-content">
                <header>Login</header>

                <form action="" method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class='bx bx-hide eye-icon' id="togglePassword" style="margin-right:15px; cursor: pointer"></i>
                    </div>

                    <div class="form-link">
                        <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
                    </div>

                    <div class="button">
                        <input type="submit" class="btn" value="Login" name="login">
                    </div>

                    <div class="form-link">
                        <span>Don't have an account? <a href="register.php" class="signup-link">Sign Up</a></span>
                    </div>
                </form>
            </div>

            <div class="line"></div>

            <div class="media-option">
                <a href="https://www.facebook.com/" class="facebook-link">
                    <i class='bx bxl-facebook facebook-icon'></i>
                </a>
                <a href="https://myaccount.google.com/" class="google-link">
                    <i class='bx bxl-google google-icon'></i>
                </a>
            </div>
        </div>
    </section>

    <script src="./assets/common.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Register</title>
    <style>
        /* Basic Reset and Body Styles (same as login) */
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

        .form-link {
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-align: right;
            color: var(--light);
            /* Changed */
        }

        .form-link a {
            color: var(--white);
            /* Set initial color to light */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        /* Hover and Active States for Links */
        .form-link a:hover,
        .form-link a:active {
            color: #f0f0f0;
            /* Change to a lighter color on hover and active states */
            text-decoration: underline;
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
        /* Icon Styling */
.eye-icon {
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  color: var(--gray);
  transition: color 0.3s ease;
}

.eye-icon:hover {
  color: var(--gray-dark);
}
    </style>
</head>

<body>
    <section class="container">
        <div class="form">
            <!-- <?php include('message.php'); ?> -->
            <div class="form-content">
                <header>Sign Up</header>
                <form action="register_process.php" method="post">
                    <div class="input-group">
                        <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                    </div>
                    <div class="input-group">
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class='bx bx-hide eye-icon' id="togglePassword" style="margin-right:15px; cursor: pointer"></i>
                    </div>
                    <div class="button">
                        <input type="submit" class="btn" value="Sign Up" name="register">
                    </div>
                    <div class="form-link">
                        <span>Already have an account? <a href="login.php" class="login-link">Log In</a></span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="./assets/common.js"></script>
</body>

</html>
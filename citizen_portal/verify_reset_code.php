<?php
session_start();

// Include your database connection
include('db_conn.php');  // Replace with your actual database connection file

if (!isset($_SESSION['reset_email'])) {
    $_SESSION['message'] = "Session Expired!";
    header("Location: forgot_password.php");
    exit();
}

$email = $_SESSION['reset_email']; // Retrieve the email from the session

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Verify Reset Code</title>

     <style>
        /* Basic Reset and Body Styles (same as login) */
        body {
          font-family: "Inter", sans-serif;
          background-color: var(--light); /* Use your light variable */
          color: #040505;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh; /* Ensure full viewport height */
        }

        /* Container for the Form */
        .container {
          width: 100%;
          max-width: 450px; /* Limit width for better readability */
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
    </style>
</head>
<body>
    <section class="container">
        <div class="form">
            <div class="form-content">
                <header>Verify Reset Code</header>
                <p>Enter the reset code you received at <?php echo htmlspecialchars($email); ?> and your new password.</p>
                <?php include('message.php'); ?>
                <form action="reset_password.php" method="post">
                    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                    <div class="input-group">
                        <input type="text" name="mfa_code" id="mfa_code" placeholder="Reset Code" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="new_password" id="new_password" placeholder="New Password" required>
                    </div>
                    <div class="input-group">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" required>
                    </div>
                    <div class="button">
                        <input type="submit" class="btn" value="Reset Password" name="reset_password">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
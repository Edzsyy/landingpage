<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/style.css">
    <title>Forgot Password</title>
    <style>
        /* Basic Reset and Body Styles (same as login) */
        body {
          font-family: "Inter", sans-serif;
          background-color: var(--light); /* Use your light variable */
          color: var(--light);
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
      .btn{
        border-radius: 8px;
        background-color: #0052f4;
        border-color: var(--primary);
        color: var(--light);
      }
      .btn:hover {
    background-color: var(--indigo);
    border-color: var(--gray-dark);
    color: var(--light);

}
    </style>
</head>
<body>
    <section class="container">
        <div class="form">
            <div class="form-content">
                <header>Forgot Password</header>
                <p>Enter your email address to receive a password reset code.</p>
                <form action="send_reset_code.php" method="post">
                    <div class="input-group">
                        <input type="email" name="email" id="email" placeholder="Email Address" required>
                    </div>
                    <div class="button">
                        <input type="submit" class="btn" value="Send Reset Code" name="send_code">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
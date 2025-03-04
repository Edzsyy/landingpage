<?php
include('./assets/inc/header.php');
?>

<style>
    body {
        font-family: "Inter", sans-serif;
        background-color: var(--light);
        color: #040505;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: var(--primary);
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 1rem;
        align-items: center;
    }

    label {
        flex: 1 0 30%;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--gray-dark);
        text-align: right;
        padding-right: 10px;
    }

    input[type="text"],
    input[type="email"],
    select {
        flex: 1 0 60%;
        padding: 0.75rem;
        margin-bottom: 0;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
        color: #555;
    }

    input[type="text"]:read-only,
    input[type="email"]:read-only,
    select:disabled {
        background-color: #eee;
        cursor: not-allowed;
    }

    .buttons {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }

    .buttons button {
        margin: 0 10px;
    }

    .btn {
        padding: 0.75rem 1.25rem;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-exit {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
    }

    .btn-exit:hover {
        background-color: #5a6268;
        border-color: #545b62;
        color: white;
    }

    .btn-edit {
        background-color: var(--primary);
        border-color: var(--primary);
        color: white;
    }

    .btn-edit:hover {
        background-color: var(--blue);
        border-color: var(--blue);
        color: white;
    }

    .btn-deactivate {
        background-color: var(--danger);
        border-color: var(--danger);
        color: white;
    }

    .btn-deactivate:hover {
        background-color: var(--red);
        border-color: var(--red);
        color: white;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .container {
            width: 95%;
            padding: 10px;
        }

        .form-group {
            flex-direction: column;
            align-items: stretch;
        }

        label {
            text-align: left;
            padding-right: 0;
        }

        input[type="text"],
        input[type="email"],
        select {
            flex: 1 0 100%;
        }
    }

    .header {
        color: var(--dark);
        padding: 0.5rem 0;
        text-align: center;
        font-size: 0.8rem;
    }
</style>

<body>
    <header class="header">
        <div class="container">
            <div class="timestamp-login">
                <div class="timestamp">WEDNESDAY, FEBRUARY 26 2025 , 07:42:44 PM</div>
            </div>
            <div class="logo-section">
                <img src="./assets/img/logo.jpg" alt="QCe Logo" class="logo-img">
            </div>
            <div class="profile-info">
                <span>Logged in as: <a href="#" class="user-name">EDGENIEL BUHIAN</a></span>
            </div>
        </div>
    </header>
    <div class="container">
        <h1>EDIT PROFILE</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="first_name">* First name:</label>
                <input type="text" id="first_name" value="EDGENIEL">

                <label for="last_name">* Last name:</label>
                <input type="text" id="last_name" value="BUHIAN">
            </div>
            <div class="form-group">
                <label for="middle_name">Middle name (Optional):</label>
                <input type="text" id="middle_name" value="ANDRADE">

                <label for="suffix">Suffix:</label>
                <select id="suffix">
                    <option value="">Select</option>
                    <option value="Jr.">Jr.</option>
                    <option value="Sr.">Sr.</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="PhD">PhD</option>
                    <option value="MD">MD</option>
                    <option value="DDS">DDS</option>
                    <option value="Esq.">Esq.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="Rev.">Rev.</option>
                </select>

            </div>
            <div class="form-group">
                <label for="birth_date">* Birth Date:</label>
                <input type="text" id="birth_date" value="MAY 16, 2002">

                <label for="sex">* Sex:</label>
                <select id="sex">
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                    <option value="OTHER">Other</option>
                </select>

            </div>
            <div class="form-group">
                <label for="email">* Email Address:</label>
                <input type="email" id="email" value="EDGENIEL16@GMAIL.COM">

                <label for="mobile">* Mobile Number:</label>
                <input type="text" id="mobile" value="0956 723 7541">
            </div>
            <div class="form-group">
                <label for="city">* City:</label>
                <select id="city">
                    <option value="QUEZON CITY" selected>QUEZON CITY</option>
                </select>
            </div>
            <div class="form-group">
                <label for="house">House #: (Optional)</label>
                <input type="text" id="house" value="BLCK-6">

                <label for="street">* Street:</label>
                <input type="text" id="street" value="KAINGIN 1">

                <label for="barangay">* Barangay:</label>
                <select id="barangay">
                    <option value="PANSOL" selected>PANSOL</option>
                </select>
            </div>
            <div class="form-group">
                <label>* Are you working in Quezon City?</label>
                <input type="radio" id="working_yes" name="working" value="yes"> Yes
                <input type="radio" id="working_no" name="working" value="no"> No
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" id="Occupation" value="ENTER OCCUPATION">
            </div>
            <div class="buttons">
                <p style="color:red;">Note: To edit your information, please proceed to QCitizen ID eApplication.</p>
                <button type="button" class="btn btn-exit" onclick="redirectToPage()">Exit</button>
                <!-- <button type="button" class="btn btn-edit">QCitizen ID eApplication</button> -->
                <button type="button" class="btn btn-deactivate">Deactivate Account</button>
            </div>
        </form>
    </div>
    <div>
        </select>
    </div>
    <script>
    function redirectToPage() {
    window.location.href = "index.php";
}
</script>
</body>

</html>
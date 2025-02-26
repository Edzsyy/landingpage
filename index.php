<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGU E-Services</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./assets/img/logo.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-center text-md-left">
                    <span class="timestamp">TUESDAY, FEBRUARY 25 2025, 07:01:48 PM</span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="profile-info">
                        <span>Logged in as: <strong>EDGENIEL BUHIAN</strong></span>
                        <i class="fa-solid fa-caret-down dropdown-icon"></i>
                        <div class="dropdown-menu">
                            <a href="#">Profile</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="welcome-section">
        <div class="container">
            <h1 style="font-family: 'Open Sans', sans-serif;">WELCOME TO</h1>
            <p style="font-family: 'Open Sans', sans-serif;">LGU E-SERVICES</p>
        </div>
    </div>

    <div class="container service-grid">

        <!-- Search Input -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for a service..." aria-label="Search"
                aria-describedby="searchButton">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="searchButton">Search</button>
            </div>
        </div>

        <!-- Carousel -->
        <div id="serviceCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#serviceCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#serviceCarousel" data-slide-to="1"></li>
                <li data-target="#serviceCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.imgur.com/D9l483q.jpg" class="d-block w-100" alt="Service 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>QC VAX EASY</h5>
                        <p>Get vaccinated easily.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/y7rB0l4.jpg" class="d-block w-100" alt="Service 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>QCitizen ID</h5>
                        <p>Apply for QCitizen ID.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/i2g69rL.jpg" class="d-block w-100" alt="Service 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Business One Stop Shop</h5>
                        <p>Get your business registered.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h2 class="text-center mb-4">Choose a service</h2>
        <!-- Service Grid -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm custom-card">
                    <img src="https://i.imgur.com/X8N9X37.png" alt="QC VAX EASY" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 16px; color: #3498db;">QC VAX EASY</h5>
                        <p class="card-text" style="font-size: 14px;">Vaccination made easy and accessible.</p>
                        <a href="#" class="btn btn-register btn-ripple">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm custom-card">
                    <img src="https://i.imgur.com/x0mE56F.png" alt="QCitizen ID eApplication" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 16px; color: #3498db;">QCitizen ID eApplication</h5>
                        <p class="card-text" style="font-size: 14px;">Apply for your QCitizen ID online.</p>
                        <a href="#" class="btn btn-register btn-ripple">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm custom-card">
                    <img src="https://i.imgur.com/u1L4O4x.png" alt="Business One Stop Shop" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 16px; color: #3498db;">Business One Stop Shop</h5>
                        <p class="card-text" style="font-size: 14px;">All your business needs in one place.</p>
                        <a href="#" class="btn btn-register btn-ripple">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>LGU E-Services</p>
            <p>For any inquiries, please call 122 or email helpdesk@quezoncity.gov.ph</p>
            <div class="row">
                <div class="col-6 text-left">
                    TERMS OF SERVICE | PRIVACY POLICY
                </div>
                <div class="col-6 text-right">
                    <i class="fa-brands fa-facebook icon"></i>
                    <i class="fa-brands fa-twitter icon"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Ripple Effect JavaScript -->
    <script>
        document.querySelectorAll('.btn-ripple').forEach(button => {
            button.addEventListener('click', function(e) {
                const x = e.clientX - e.target.offsetLeft;
                const y = e.clientY - e.target.offsetTop;

                const ripple = document.createElement('span');
                ripple.classList.add('ripple');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;
                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600); // Adjust time to match your CSS animation
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownIcon = document.querySelector(".dropdown-icon");
            const dropdownMenu = document.querySelector(".dropdown-menu");

            dropdownIcon.addEventListener("click", function(event) {
                event.stopPropagation();
                dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
            });

            // Close dropdown if clicked outside
            document.addEventListener("click", function(event) {
                if (!event.target.closest(".profile-info")) {
                    dropdownMenu.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>
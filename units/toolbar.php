<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
</head>
    <style>
        /* Add custom font for the brand text */
        .brand-text {
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        /* Style for the logo image */
        .logo-img {
            width: 40px; /* Adjust the width of the logo as needed */
            margin-right: 10px; /* Add some margin between the logo and text */
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5); /* Translucent black */
        }
    </style>
<body class="p-3 m-0 border-0 bd-example">

<!-- Example Code -->

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <!-- Add an image tag for the logo -->
        <a class="navbar-brand" href="#">
            <!-- Add the logo image -->
            <img src="/images/logo.png" alt="Logo" class="logo-img">
            <!-- Change the text for the brand -->
            <span class="brand-text">PROXNOTES</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Me
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://www.facebook.com/hamkeeer" target="_blank">Facebook</a></li>
                        <li><a class="dropdown-item" href="https://www.instagram.com/preshakdjodd" target="_blank">Instagram</a></li>
                        <li><a class="dropdown-item" href="https://github.com/PROX-GOD" target="_blank">GitHub</a></li>
                        <li><a class="dropdown-item" href="mailto:proxjodd@gmail.com9">Email</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tools
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">MCQ Exam</a></li>
                        <li><a class="dropdown-item" href="#">Syllabus</a></li>
                        <li><a class="dropdown-item" href="#">Grid</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- End Example Code -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
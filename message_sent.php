<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent | Harmandeep's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <style>
        .alert-success {
            background: linear-gradient(135deg, rgba(39, 174, 96, 0.8), rgba(39, 174, 96, 0.6));
            color: white;
            border-radius: 5px;
            padding: 15px;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            animation: fadeInEffect 1.5s ease-out;
            margin-top: 20px;
            text-align: center;
        }

        @keyframes fadeInEffect {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .btn-primary {
            background-color: #ff4757;
            border-color: #ff4757;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #e84118;
            border-color: #e84118;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Harmandeep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="favourite.html">Favourite</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <h1 class="slide-in">Message Sent!</h1>
        <p class="lead">Your message has been sent successfully. I will get back to you as soon as possible.</p>
    </div>
</header>

<div class="container my-5">
    <div class="text-center">
        <?php if (isset($_SESSION['successMessage'])): ?>
            <div class="alert alert-success">
                <i class="bi bi-check-circle"></i> <?php echo $_SESSION['successMessage']; ?>
            </div>
            <?php
            unset($_SESSION['successMessage']);
            ?>
        <?php endif; ?>
        <a href="contact.php" class="btn btn-primary">Go back to Contact Form</a>
    </div>
</div>

<footer class="text-white text-center">
    <p class="mb-0">&copy; 2025 Harmandeep | All Rights Reserved</p>
</footer>

</body>
</html>

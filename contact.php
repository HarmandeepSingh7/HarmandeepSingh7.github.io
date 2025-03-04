<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        $_SESSION['successMessage'] = "Message sent successfully!";
    } else {
        $_SESSION['successMessage'] = "Error: Could not send message.";
    }

    header("Location: message_sent.php");
    exit();
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Harmandeep's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
        <h1 class="slide-in">Contact Me</h1>
        <p class="lead">Let's connect! Reach out for collaborations or questions.</p>
    </div>
</header>

<div class="container my-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Send a Message</h2>
                    <form action="contact.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Message</label>
                            <textarea class="form-control" name="message" rows="4" placeholder="Write your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <h2 class="card-title">Contact Details</h2>
                    <p><i class="bi bi-envelope"></i> Email: harmandeepbika@gmail.com</p>
                    <p><i class="bi bi-phone"></i> Phone: +31 6 16281112</p>
                    <p><i class="bi bi-geo-alt"></i> Location: The Hague, Netherlands</p>
                    <hr>
                    <h3>Follow Me</h3>
                    <a href="https://github.com/HarmandeepSingh7" class="social-icon"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/harmandeepsingh06/" class="social-icon"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['successMessage'])): ?>
    <div id="successMessage" class="fadeIn">
        <i class="bi bi-check-circle"></i> <?php echo $_SESSION['successMessage']; ?>
    </div>
    <?php unset($_SESSION['successMessage']); ?>
<?php endif; ?>

<footer class="text-white text-center">
    <p class="mb-0">&copy; 2025 Harmandeep | All Rights Reserved</p>
</footer>

</body>
</html>

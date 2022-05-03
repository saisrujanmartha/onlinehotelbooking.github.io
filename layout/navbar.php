
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container">
    <a class="navbar-brand" href="index.php">OHMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"  style="color: black;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Book</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="" aria-current="page"><i class="fas fa-shopping-cart"></i></a>
        </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin/dashboard.php">Admin</a>
            </li>
    </ul>
    </div>
</div>
</nav>

<?php
require('config/config.php'); #Database connection and other site configuration
// SQL query to select data from database
$result = $con->query("SELECT * FROM tbl_hotels");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Hotel Management</title>
    <link rel="icon" href="img/favicon.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include('layout/navbar.php');?>

</body>
</html>
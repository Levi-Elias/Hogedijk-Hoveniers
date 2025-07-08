<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<div class="demo-warning">
    Let op: Dit is een demo-site!
</div>
<nav class="navbar custom-navbar">
    <div class="custom-navbar-container">
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="assets/photos/logo.png" alt="Logo" class="navbar-logo">
            </a>
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
        <ul class="navbar-nav">
            <li><a href="index.php" class="nav-link<?php if($current == 'index.php') echo ' active'; ?>">Home</a></li>
            <li><a href="diensten.php" class="nav-link<?php if($current == 'diensten.php') echo ' active'; ?>">Diensten</a></li>
            <li><a href="project.php" class="nav-link<?php if($current == 'project.php') echo ' active'; ?>">Projecten</a></li>
            <li><a href="contact.php" class="nav-link<?php if($current == 'contact.php') echo ' active'; ?>">Contact</a></li>
        </ul>
    </div>
</nav>
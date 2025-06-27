<?php
include("includes/header.php");
include('includes/nav.php');
?>

<body>
<div class="container">
    <h1>Contact</h1>
    <div class="big-phone">Bel: 06-12345678</div>

    <form method="post" action="contact.php" autocomplete="off">
        <label for="naam">Naam *</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" required>

        <label for="telefoon">Telefoonnummer *</label>
        <input type="tel" id="telefoon" name="telefoon" required pattern="[0-9+\s\-]{8,15}">

        <label for="vraag">Vraag of opmerking *</label>
        <textarea id="vraag" name="vraag" rows="5" required></textarea>

        <!-- Honeypot anti-spam veld -->
        <input class="honeypot" type="text" name="website" tabindex="-1" autocomplete="off">

        <input type="submit" value="Verzenden">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $naam = trim($_POST['naam'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefoon = trim($_POST['telefoon'] ?? '');
        $vraag = trim($_POST['vraag'] ?? '');
        $honeypot = $_POST['website'] ?? '';

        if ($honeypot !== '') {
            echo "<div style='color:red;'>Spam gedetecteerd.</div>";
        } elseif ($naam && filter_var($email, FILTER_VALIDATE_EMAIL) && $telefoon && $vraag) {
            echo "<div style='color:green;'>Bedankt voor je bericht! We nemen zo snel mogelijk contact op.</div>";
        } else {
            echo "<div style='color:red;'>Vul alle verplichte velden correct in.</div>";
        }
    }
    ?>

    <div class="info-block adres">
        <strong>Adres:</strong><br>
        Hendrik Hogendijk<br>
        Hogedijk 123<br>
        1234 AB Plaatsnaam
    </div>

    <div class="kaart">
        <iframe
            src="https://www.google.com/maps?q=Hogedijk+123,1234+AB+Plaatsnaam&output=embed"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="info-block openingstijden">
        <strong>Openingstijden:</strong><br>
        Maandag - vrijdag: 07.00 - 17.00 uur<br>
        Zaterdag: Op afspraak<br>
        Zondag: Gesloten
    </div>
</div>
</body>
</html>
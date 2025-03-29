<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Hamzeh Shekh Khalil">
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script defer src="JavaScript/Menu_HeaderEnFooter.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <title>Header en Footer</title>
    
</head>

<body>
    <header>
        <a href="LandingsPagina.php">
            <img id="MainLogo" src="Images/LogoSemi.png" alt="Logo1">
        </a>


        <nav>
            <ul class="nav-links">
                <li><a href="LandingsPagina.php">Home</a></li>
                <li><a href="Lunch en Dinner.php">Menu</a></li>
                <li><a href="Openingstijden en Locatie.php">Openingstijden en Locatie</a></li>
                <li><a href="Reservering.php">Reservering</a></li>
                <li><a href="Vactures.php">Vactures</a></li>
            </ul>
            <div class="menu-icon" onclick="toggleMenu()">☰</div>
        </nav>

        <ul class="mobile-menu">
            <li><a href="LandingsPagina.php">Home</a></li>
            <li><a href="Lunch en Dinner.php">Menu</a></li>
            <li><a href="Openingstijden en Locatie.php">Openingstijden en Locatie</a></li>
            <li><a href="Reservering.php">Reservering</a></li>
            <li><a href="Vactures.php">Vactures</a></li>
        </ul>
    </header>
</body>

</html>
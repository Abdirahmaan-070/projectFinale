<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta discription="Openingstijden en Locatie (Info pagina) van de website">
    <meta keywords="Restaurant, Openingstijden en Locatie , Vlam en Vlees">
    <meta author="Hamzeh Shekh Khalil">
    <script src="JavaScript/Map.js"></script>
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="https://kit.fontawesome.com/ddc4d07808.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    
    <title>Openingstijden en Locatie</title>
</head>

<body>
    <header>
        <?php include "Header.php" ?>
    </header>

    <main>
        <section id="Red_Rec1">
            <h1>Vlam en Vlees</h1>
            <h4>Zoek jouw favorite locatie</h4>
            <p>Overall beschrikbaar in elke stad</p>
        </section>

        <section id="Locatie">
            <h1>Je vindt ons in</h1> <i class="fa-solid fa-arrow-right-long"></i>
            <H4>Promenade 12 <br>
                2711AB Zoetermeer</H4>
        </section>

        <section id="Map"></section>



        <h2 id="openingstijden-title">Onze openingstijden
            <img id="clock-icon" src="https://cdn-icons-png.flaticon.com/512/2088/2088617.png" alt="clock icon">
        </h2>
        <section id="openingstijden-container">
            <table id="openingstijden-table">
                <tr id="maandag">
                    <td>Ma</td>
                    <td>8:30 Am - 6:00 pm</td>
                </tr>
                <tr id="dinsdag">
                    <td>Di</td>
                    <td>8:00 Am - 5:30 pm</td>
                </tr>
                <tr id="woensdag">
                    <td>Wo</td>
                    <td>8:00 Am - 5:30 pm</td>
                </tr>
                <tr id="donderdag">
                    <td>Do</td>
                    <td>10:00 Am - 8:00 pm</td>
                </tr>
                <tr id="vrijdag">
                    <td>Vr</td>
                    <td>10:00 Am - 11:00 pm</td>
                </tr>
                <tr id="zaterdag">
                    <td>Za</td>
                    <td>6:30 Am - 3:00 pm</td>
                </tr>
                <tr id="zondag">
                    <td>Zo</td>
                    <td id="closed-day">~Closed~</td>
                </tr>
            </table>
        </section>

        <section id="Conatct_Sec_1">
            <h4>Vragen? Contact ons op <br> de volgende gegevens</h4><br>
            <p>email: info@vlamenvleeszoetermeer.nl<br>
                Telefoonnummer: 088-1321111</p>
        </section>
        <section id="Space1"></section>

        <footer>
            <?php
            include "Footer.php"
            ?>
        </footer>

    </main>
</body>

</html>
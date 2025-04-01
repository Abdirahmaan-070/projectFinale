<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta discription="Landingspagina (Home pagina) van de website">
    <meta keywords="Restaurant, Home, Landingspagina , Vlam en Vlees">
    <meta author="Hamzeh Shekh Khalil">
    <link rel="stylesheet" href="CSS/stylesheet.css">
    <script src="https://kit.fontawesome.com/ddc4d07808.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">

    <title>Landings Pagina</title>
</head>

<body>
    
    <header>
        <?php include "Header.php" ?>
    </header>


    <main id="main_Home">
        <section id="WelcomBG">
            <h1 id="H1_Titel_Home">Welkom In Vlam en Vlees</h1>
            <h4 id="H4_SideTitel_Home">Het beste vlees restaurant since 1985</h4>
        </section>



        <section id="Ytvideo_Home">
            <h4 id="yt_titel">Check out onze restaurant!</h4>
            <iframe width="720" height="420" src="https://www.youtube.com/embed/pq3Otf0zbdk?si=RPlY8Tkb_ROthclj" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <i class="fa-solid fa-arrow-left"></i>

        </section>


        <section id="infoTekst_Home">

            <h1>Wie zijn wij?</h1>
            <br><br>
            <article class="Kopje_Home">
                <P>Sinds 1985 is Vlam & Vlees dé bestemming in Zoetermeer voor liefhebbers van perfect gegrild vlees en authentieke barbecuegerechten. Wat begon als een passie voor vuur, smaak en ambachtelijk bereid vlees, is in de afgelopen decennia uitgegroeid tot een begrip in de stad. </P>
            </article>
            <br><br>
            <article class="Kopje_Home">
                <P>Bij ons draait alles om de kunst van het grillen, waarbij we de beste stukken vlees met zorg selecteren en bereiden op open vuur en houtskoolgrills.
                    Ons menu is een eerbetoon aan de rijke tradities van barbecue en grillculturen van over de hele wereld. Van langzaam gegaarde spareribs tot malse steaks en perfect gekruide burgers – bij Vlam & Vlees proef je de diepe, robuuste smaken van echt vakmanschap. Onze chefs werken uitsluitend met de beste, dagverse ingrediënten en brengen het beste van vuur en vlam samen op je bord.</P>
            </article>
            <br><br>
            <article class="Kopje_Home">
                <P>
                    Naast onze passie voor smaak staat gastvrijheid bij ons centraal. Of je nu langskomt voor een sfeervol diner, een gezellig samenzijn met vrienden of een zakelijke bijeenkomst, wij zorgen voor een warme en uitnodigende sfeer waarin iedereen zich thuis voelt.
                    Kom langs en ervaar zelf de vurige passie van Vlam & Vlees – waar goed gezelschap, kwaliteit en de perfecte barbecuebeleving samenkomen.</P>
            </article>

        </section>

        <section id="Event">
            <section id="Eventimg">
            </section>
            <section id="Eventinfo">
                <h1>ALL YOU CAN EAT !</h1>
                <h3>probeer nu</h3>

                <P>Van 3 tot 16 maart open om voor alleen 8 euro te eten !
                </P>

            </section>
        </section>

        <h1 id="GL_titel">Onze gerechten</h1>

        <section class="container">
            <section class="grote-foto"></section>
            <section class="kleine-foto foto1"></section>
            <section class="kleine-foto foto2"></section>
            <section class="kleine-foto foto3"></section>
            <section class="kleine-foto foto4"></section>
        </section>


        <section id="Space"></section>
    </main>

    <footer>
        <?php
        include "Footer.php"
        ?>
    </footer>
</body>

</html>
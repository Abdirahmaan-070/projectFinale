<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Slider</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JavaScript/script.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <?php include 'Header.php'; ?>
    </header>

    <body>
    <section id="W3lkom">
    </section>
        <?php
        $menu = [
            "Voorgerechten" => [
                ["title" => "Geitenkaas salade", "price" => "€30", "description" => "– Frisse salade met warme geitenkaas, honing en walnoten. (Contains milk, nuts, honey)", "Images" => "Images/salade.png"],
                ["title" => "Beef Tataki", "price" => "€30", "description" => "Licht gegrilde runderplakjes met sojagemberdressing en sesamzaad. (Contains soy, sesame, gluten in soy sauce)", "Images" => "Images/taki.png"],
                ["title" => "Spicy Grilled Chicken Wings", "price" => "€30", "description" => "Krokante kippenvleugels met een pittige en frisse marinade. (Contains soy, possible gluten in marinade)", "Images" => "Images/food.png"],
                ["title" => "Roasted Bell Pepper Soup –", "price" => "€30", "description" => "Romige soep van geroosterde rode paprika met een vleugje gerookte paprika. (Contains milk, possible gluten in croutons))", "Images" => "Images/soup.png"],
                ["title" => "Crispy Calamari", "price" => "€30", "description" => "Goudbruin gefrituurde inktvisringen met knoflookaioli. (Contains shellfish, egg, gluten in batter)", "Images" => "Images/rings.png"]




            ],
            "Hoofdgerechten" => [
                ["title" => "Stuffed Bell Pepper", "price" => "€40", "description" => "Gevulde paprika met kruidige rijst, zwarte bonen en gesmolten kaas. (Contains milk, possible gluten in seasoning).", "Images" => "Images/pepper.png"],
                ["title" => "Tomahawk Steak", "price" => "€38", "description" => "Extra dikke rundersteak, perfect gegrild op open vuur.(No common allergens, check sauces)", "Images" => "Images/tomohawk steak.png"],
                ["title" => "Spareribs Vlammen", "price" => "€35", "description" => " Malse spareribs met onze geheime pittige marinade. (Contains soy, possible gluten in marinade)", "Images" => "Images/ribs.png"],
                ["title" => "Crispy Teriyaki Salmon", "price" => "€42", "description" => " Krokante zalm met teriyakisaus, geserveerd met groenten en jasmijnrijst. (Contains fish, soy, gluten in teriyaki sauce)", "Images" => "Images/zalm.png"],
                ["title" => "Grilled Chicken Skewers", "price" => "€36", "description" => "Sappige kipspiesjes gemarineerd in een kruidige honing-mosterdsaus. (Contains mustard, possible traces of gluten in marinade).", "Images" => "Images/skew.png"]
            ],
            "Desserts" => [
                ["title" => "berry parfait", "price" => "€15", "description" => "Luchtige yoghurtmousse met een laagje vers fruit en granola. (Contains milk, gluten in granola, possible nuts).", "Images" => "Images/berry.png"],
                ["title" => "Chocolade lava cake", "price" => "€18", "description" => "Warme chocoladetaart met een zachte kern van pure chocolade. (Contains milk, gluten, egg, possible nuts in decoration)", "Images" => "Images/cake.png"],
                ["title" => "Crème brûlée", "price" => "€16", "description" => "Vanillepudding met een gekarameliseerde suikerlaag.", "Images" => "Images/creme.png"],
                ["title" => "Mango sorbet", "price" => "€14", "description" => "Frisse mango sorbet met munt.", "Images" => "Images/mango.png"],
                ["title" => "lemon cheesecake", "price" => "€17", "description" => "Romige cheesecake met een frisse citroentwist en koekjesbodem. (Contains milk, gluten, egg, possible nuts in crust).", "Images" => "Images/lemon.png"]
            ],
            "Drinks" => [
                ["title" => "Vanilla Chai Latte", "price" => "€12", "description" => "Warme kruidige chai met vanille en opgeschuimde melk. (Contains milk, possible traces of nuts in spice blend).", "Images" => "Images/vanille.png"],
                ["title" => "Flame & Grill Iced Tea", "price" => "€14", "description" => "Huisgemaakte ijsthee met citroen en munt. (Contains citrus, mint).", "Images" => "Images/tea.png"],
                ["title" => "Tropical Flame Mocktail", "price" => "€13", "description" => "Mix van passievrucht, mango en kokoswater. (Contains citrus, possible traces of nuts in coconut water).", "Images" => "Images/tp.png"],
                ["title" => "Ginger Spritz", "price" => "€8", "description" => "Verfrissende combinatie van gember, limoen en bruisend water. (Contains citrus, ginger).", "Images" => "Images/ginger.png"],
                ["title" => "Hibucus Ijsthee", "price" => "€9", "description" => "Verfrissende huisgemaakte hibiscusthee met een vleugje sinaasappel. (Contains citrus).", "Images" => "Images/hippie.png"]
            ]
        ];
        ?>
        <?php foreach ($menu as $categorie => $gerechten): ?>
            <h2 class="title"><?php echo $categorie; ?></h2>

            <section class="carousel-container">
                <button class="carousel-btn prevBtn">&#10094;</button>
                <section class="carousel">
                    <?php foreach ($gerechten as $gerecht): ?>
                        <article class="card">
                            <figure class="image-container">
                                <img src="<?php echo $gerecht['Images']; ?>" alt="<?php echo $gerecht['title']; ?>">
                            </figure>
                            <section class="card-content">
                                <h3><?php echo $gerecht['title']; ?></h3>
                                <p class="price"><?php echo $gerecht['price']; ?></p>
                                <p><?php echo $gerecht['description']; ?></p>
                            </section>
                        </article>
                    <?php endforeach; ?>
                </section>
                <button class="carousel-btn nextBtn">&#10095;</button>
            </section>

        <?php endforeach; ?>

        <section id="Space1"></section>
        <footer>
            <?php include 'Footer.php'; ?>
        </footer>

    </body>

</html>
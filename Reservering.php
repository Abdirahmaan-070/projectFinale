<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reservering">
    <meta name="keywords" content="Reservering, Restaurant, Food">
    <meta author="Abdirahmaan">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <header>
        <?php include 'Header.php'; ?>
    </header>



    <section class="reservation-container">
        <h2 class="reservation-title">Reserveer een tafel</h2>
        <form class="reservation-form">
            <article class="form-group">
                <label for="firstname">Voornaam</label>
                <input type="text" id="firstname" placeholder="Voornaam">
            </article>
            <article class="form-group">
                <label for="lastname">Achternaam</label>
                <input type="text" id="lastname" placeholder="Achternaam">
            </article>
            <article class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="1234@hotmail.com">
            </article>
            <article class="form-group">
                <label for="phone">Telefoonnummer</label>
                <input type="tel" id="phone" placeholder="+31612345678">
            </article>
            <article class="form-group">
                <label for="date">Reservatie dag</label>
                <input type="date" id="date">
            </article>
            <article class="form-group">
                <label for="time">Reservatie tijd</label>
                <input type="time" id="time">
            </article>
            <article class="form-group">
                <label for="guests">Met hoeveel personen komt u?</label>
                <input type="number" id="guests" min="1">
            </article>
            >
            <article class="form-group full-width">
                <label for="remarks">Opmerkingen</label>
                <textarea id="remarks" rows="4"></textarea>
            </article>
            <button class="submit-btn" onclick="submitForm()">Verstuur</button>
        </form>
    </section>


    <section id="Space1"></section>
    <footer>
        <?php include 'Footer.php'; ?>
    </footer>
</body>

</html>
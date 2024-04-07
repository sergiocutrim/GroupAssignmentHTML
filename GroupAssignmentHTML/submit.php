<!DOCTYPE html>
<html lang="en">

<head> <!-- the same for all pages just including the fonts and all the info-->
    <meta charset="utf-8" />
    <title>SER. Typewriters</title>
    <meta name="author" content="Group_NL - Dalbir Singh, Natalia Selestrini Dias, Samir K C, Sergio Cutrim Gouveia" />
    <meta name="description" content="Project 1 (Micro-Site)">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header> <!-- same header in all pages with banner and image-->
        <img src="images/logo.png" alt="Logo SER.">
        <div>
            <h1>SER.</h1>
            <h2>Typewriters</h2>
        </div>
    </header>
    <div id="navbar">  <!-- this part is also the same in all pages brings the information in the includes global nav-->
        <?php
        include 'includes/global-nav.php';
        ?>
    </div>

    <main>
        <div class="container"> <!-- this div includes the text in the top of page after the user sends the message-->
            <div class="success-message">
               <h1> Your form has been successfully submitted to our support team! Someone from our team will contact you soon.<h1>
            </div>
        </div>
    </main>

    <footer>
        <?php
        include 'includes/footer-nav.php';
        ?>
    </footer>
</body>

</html>

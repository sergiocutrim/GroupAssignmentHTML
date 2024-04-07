<!DOCTYPE html>
<html lang="en">
<head> <!--standard information of the page, including the tab name, group name and all the fonts-->
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
	<link
		href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
		rel="stylesheet">
    <!-- some style that is exclusive of this page, everything else is in the css-->
    <style> 
            .wrapper {
              display: flex;
              align-items: center;
              justify-content: space-between;
              gap: 20px;
              padding: 0px 20px 0px 0px;
            }

            .wrapper img {
              width: 50vw;
            }
          
            header {
              padding: 60px;
              text-align: center;
              align-items: center;
              width: auto;
              background-color: black;
            }

            header>img {
              display: inline-block;
              vertical-align: middle;
            }

            header>div {
              display: inline-block;
              vertical-align: middle;
              margin-left: 20px;
            }

            header>div>h1 {
              font-family: 'Special Elite', system-ui;
              font-size: 2.4rem;
              color: white;
              margin: 0;
            }

            header>div>h2 {
              font-size: 1.2rem;
              font-family: "Merriweather", serif;
              font-weight: 400;
              font-style: normal;
              color: white;
              margin: 0;
            }

      /* NAV ---------------------------------------------- */
      #navbar ul {
        /take off the bullet point style/
        list-style: none;
        margin: 2rem 0 2rem 1rem;
        padding: 0;
        list-style: none;
      }

      #navbar li {
        font-family: 'Special Elite';
        font-size: 1.2rem;
        text-decoration: none;
        display: block;
        position: relative;
        padding: 15px 0;
      }

      #navbar ul li {
        position: relative;
        /display all - same line/
        display: inline-block;
      }

      .navButton:link,
      .navButton:visited {
        padding: 0.5rem 2rem;
        text-decoration: none;
        background-color: white;
        color: black;
      }

      .navButton::after {
        background: none repeat scroll 0 0 transparent;
        bottom: 0;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        background: black;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
        width: 0;
      }

      /* mouse over link */
      .navButton:hover::after {
        width: 70%;
        left: 15%;
      }

      /* selected link */
      .active::after {
        width: 70%;
        left: 15%;
      }

      /* FOOTER -------------------------------------------- */
      div.footer {
        float: right;
        /align on the right side/
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 1.7rem 1rem 0;
        /align text and image/
      }

      div.footer>p,
      div.footer>a {
        display: inline-block;
        /text and image - same line/
        font-family: 'Special Elite', system-ui;
        color: black;
        text-decoration: none;
      }

      div.footer>img {
        display: inline-block;
        /text and image - same line/
      }
          
          
          
          </style>
</head>
  <body> <!--page body-->
    <header> <!-- this part in the begining is the same for all pages-->
		  <img src="images/logo.png" alt="Logo SER.">
		  <div>
			  <h1>SER.</h1>
			  <h2>Typewriters</h2>
		  </div>
	  </header>
	  <div id="navbar"> <!-- this part is also the same in all pages brings the information in the includes global nav-->
		  <?php
		  include 'includes/global-nav.php';
		  ?>
	  </div>
    <div> <!-- creates a master div for all the page-->
      <div class="wrapper"> <!-- one div to put the image-->
      <img src="images\79.jpg" alt="three people watching a presentation">
        <div class="rightSide"><!-- another div inside to put the text-->
          <h1 style="text-align: center;">About Us</h1>
          <div style="background-color: #F1EACE;padding: 15px 15px;">
            <p style="line-height: 1.4;">
		          Welcome to SER Typewriters, your one-stop destination for vintage and modern typewriters. We are a passionate team of typewriter enthusiasts dedicated to preserving the art and craft of writing.

              At SER typewriters, we believe that typewriters are more than just machines; they are a piece of history, a work of art, and a tool for creativity. Whether you're a seasoned writer or a collector, we offer a curated selection of typewriters to suit your needs and inspire your creativity.

              Our journey began with a love for typewriters and a desire to share that passion with others. What started as a hobby has now grown into a thriving business, thanks to the support of our loyal customers and the typewriter community.

              Each typewriter in our collection is carefully selected and restored to its former glory, ensuring that you receive a quality product that will last for years to come. We also offer a range of accessories and supplies to enhance your typewriting experience.

              Join us in celebrating the beauty and nostalgia of typewriters. Browse our collection, and find the perfect typewriter to inspire your next masterpiece.

              Thank you for choosing SER Typewriters.

            <br><br>
            <b>Happy typing!</b>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
	<footer> <!-- the same footer in all pages it just brings the footer in includes-->
		<?php
		include 'includes/footer-nav.php';
		?>
	</footer>
</body>

</html>
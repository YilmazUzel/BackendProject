<?php
session_start();
?>

<!DOCTYPE html>
<head>
  <title>Over Ons - Bloodies Candle</title>
  <link rel="icon" href="logo.png"/>
  <link rel="stylesheet" href="style.css">
</head>
<body class="about-page">

  <header>
    <h1>Bloodies Candle</h1>
    <nav>
      <a href="index.php"><button>Home</button></a>
      <a href="Catalogus.php"><button>Catalogus</button></a>
      <a href="overons.php"><button>Over Ons</button></a>
      
     <?php if (isset($_SESSION['loggedInUser'])): ?>
      <a href="logout.php"><button>Uitloggen</button></a>
     <?php else: ?>
      <a href="login.php"><button>Login</button></a>
      <?php endif; ?>
    </nav>
  </header>

  <section class="overons">
    <h2>Ons Verhaal</h2>
    <p>
      Het begon allemaal op een regenachtige herfstavond in 2020. Terwijl de wereld stil leek te staan, vond ik rust in iets kleins: het maken van mijn eigen kaarsen. Wat begon als een hobby aan de keukentafel met een paar geuren en restjes was, groeide uit tot een passie voor sfeer, geur en ambacht.
    </p>
    <p>
      Na maanden van experimenteren, mengen en testen ontstond het idee voor *Bloodies Candle*. De naam is een knipoog naar onze vurige passie en de diepe kleuren die we gebruiken in onze collecties. Elke kaars wordt met de hand gegoten met zorg, liefde en 100% natuurlijke ingrediënten. We kiezen bewust voor duurzame materialen en unieke geurcombinaties die niet alleen een ruimte vullen, maar ook een gevoel oproepen.
    </p>
    <p>
      Vandaag de dag zijn we trots op onze groeiende community van kaarsliefhebbers. Van knusse geurkaarsen voor in de woonkamer tot rustgevende exemplaren voor tijdens yoga of een warm bad – we geloven dat kaarsen meer zijn dan decoratie. Ze zijn een ervaring. Een herinnering. Een moment voor jezelf.
    </p>
    <p>
      Bedankt dat je deel uitmaakt van ons verhaal.
    </p>
    <p>
      - Het team van Bloodies Candle
    </p>
  </section>

  <footer>
    &copy; <?php echo date('Y'); ?> Bloodies Candle
  </footer>

</body>
</html>

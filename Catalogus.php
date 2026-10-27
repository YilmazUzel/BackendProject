<?php
session_start();

include 'db.php';

$sql = "SELECT id, naam, beschrijving, afbeelding, populair FROM producten ORDER BY id";
$producten = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<head>
  <title>Bloodies Candle - Catalogus</title>
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>
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

  <section class="hero">
    <h2>Breng Warmte in Huis met Bloodies Candle</h2>
    <p>Unieke handgemaakte kaarsen voor elk moment - stijlvol, rustgevend en duurzaam geproduceerd.</p>
  </section>

  <section class="over-ons">
    <h3>Over Bloodies Candle</h3>
    <p>Bij Bloodies Candle geloven we in de kracht van sfeer. Al onze kaarsen zijn met liefde met de hand gegoten, gemaakt van natuurlijke ingrediënten en geleverd met een verhaal. Of je nu ontspant in bad of een gezellige avond plant, wij brengen de juiste geur in jouw huis.</p>
  </section>

  <section class="highlight-producten">
    <?php foreach ($producten as $product): ?>
      <a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
        <div class="product">
          <img src="<?php echo htmlspecialchars($product['afbeelding']); ?>" alt="<?php echo htmlspecialchars($product['naam']); ?>">
          <h4><?php echo htmlspecialchars($product['naam']); ?></h4>
          <?php if ($product['populair'] == 1): ?>
            <p>🔥 Populair</p>
          <?php endif; ?>
          <p><?php echo htmlspecialchars($product['beschrijving']); ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </section>

  <footer>
    &copy; <?php echo date('Y'); ?> Bloodies Candle
  </footer>
</body>
</html>

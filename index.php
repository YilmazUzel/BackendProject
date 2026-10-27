<?php
session_start();

include 'db.php';

if (!isset($_SESSION['loggedInUser'])) {
  header('Location: Login.php');
  exit;
}

$sql = "SELECT id, naam, beschrijving, afbeelding FROM producten WHERE populair = 1 ORDER BY id";
$populaireProducten = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<head>
  <title>Bloodies Candle - Kaarsencatalogus</title>
  <link rel="icon" href="logo.png"/>
  <link rel="stylesheet" href="style.css">
</head>
<body class="homepage">
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
    <h2>Ontdek de warmte van handgemaakte kaarsen</h2>
    <p>Unieke geuren, natuurlijke materialen en een rustgevende sfeer voor elk moment.</p>
  </section>
  <section class="catalogus">
    <h3>Populaire Kaarsen</h3>
    <div class="producten">
      <?php if (count($populaireProducten) == 0): ?>
        <p>Op dit moment zijn er geen populaire kaarsen.</p>
      <?php else: ?>
        <?php foreach ($populaireProducten as $product): ?>
          <a class="product-link" href="product.php?id=<?php echo $product['id']; ?>">
            <div class="product">
              <img src="<?php echo htmlspecialchars($product['afbeelding']); ?>" alt="<?php echo htmlspecialchars($product['naam']); ?>">
              <h4><?php echo htmlspecialchars($product['naam']); ?></h4>
              <p><?php echo htmlspecialchars($product['beschrijving']); ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>

    <footer>
    &copy; <?php echo date('Y'); ?> Bloodies Candle
  </footer>

</body>
</html>

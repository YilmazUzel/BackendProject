<?php
session_start();

include 'db.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT id, naam, beschrijving, afbeelding, populair FROM producten WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Product - Bloodies Candle</title>
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
    </nav>
  </header>

  <section class="product-gegevens">
    <?php if ($product): ?>
      <div class="product product-kaart">
        <div class="product-afbeelding">
          <img src="<?php echo htmlspecialchars($product['afbeelding']); ?>" alt="<?php echo htmlspecialchars($product['naam']); ?>">
        </div>
        <div class="product-inhoud">
          <?php if ($product['populair'] == 1): ?>
            <p><strong>Populair</strong></p>
          <?php endif; ?>
          <h2><?php echo htmlspecialchars($product['naam']); ?></h2>
          <p><?php echo htmlspecialchars($product['beschrijving']); ?></p>
          <a class="terug-link" href="Catalogus.php">Terug naar catalogus</a>
        </div>
      </div>
    <?php else: ?>
      <div class="geen-product">
        <h2>Geen product</h2>
        <p>Dit product bestaat niet.</p>
        <a class="terug-link" href="Catalogus.php">&larr; Terug naar catalogus</a>
      </div>
    <?php endif; ?>
  </section>

  <footer>
    &copy; <?php echo date('Y'); ?> Bloodies Candle
  </footer>
</body>
</html>

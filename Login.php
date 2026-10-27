<?php
session_start();

include 'db.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $stmt = $pdo->prepare("SELECT id, password FROM gebruikers WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

if ($user && $password === $user['password']) { 
    $_SESSION['loggedInUser'] = $user['id'];
    header("Location: index.php");
    exit;
}
 else {
            $error = "Ongeldige gebruikersnaam of wachtwoord.";
        }
    } else {
        $error = "Vul beide velden in.";
    }
}
?>

<!DOCTYPE html>
<head>
  <title>Login - Bloodies Candle</title>
  <link rel="icon" href="logo.png"/>
  <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

  <header>
    <h1>Bloodies Candle</h1>
  </header>

  <main>
    <div class="login-container">
      <h2>Login bij Bloodies Candle</h2>
      <?php if (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
      <?php endif; ?>

      <form method="POST">
        <input type="text" name="username" placeholder="Gebruikersnaam" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <button type="submit">Inloggen</button>
      </form>
    </div>
  </main>
  <footer>
    &copy; <?php echo date('Y'); ?> Bloodies Candle
  </footer>

</body>

</html>


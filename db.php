<?php
$verbinding = "mysql:host=localhost;dbname=Bloodies Candle;charset=utf8mb4";

try {
    $pdo = new PDO($verbinding, 'bit_academy', 'bit_academy');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $fout) {
    die("Databaseverbinding mislukt: " . $fout->getMessage());
}

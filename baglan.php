<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=ikinci_el;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "Veritabanı bağlantı hatası: " . $e->getMessage();
}
?>
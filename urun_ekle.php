<?php include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Ürün Ekle</h2>
    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Ürün Adı:</label>
            <input type="text" name="urun_adi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Açıklama:</label>
            <textarea name="aciklama" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Fiyat:</label>
            <input type="number" step="0.01" name="fiyat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori:</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <button type="submit" name="ekle" class="btn btn-success">Ürün Ekle</button>
    </form>
    <?php
    if (isset($_POST['ekle'])) {
        $sorgu = $db->prepare("INSERT INTO urunler (kullanici_id, urun_adi, aciklama, fiyat, kategori, tarih) VALUES (1,?,?,?,?,NOW())");
        $sorgu->execute([$_POST['urun_adi'], $_POST['aciklama'], $_POST['fiyat'], $_POST['kategori']]);
        echo '<div class="alert alert-success mt-3">Ürün başarıyla eklendi.</div>';
    }
    ?>
</div>
</body>
</html>
<?php include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yorum Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Yorum Yap</h2>
    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Ürün ID:</label>
            <input type="number" name="urun_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Puan (1-5):</label>
            <input type="number" name="puan" class="form-control" required min="1" max="5">
        </div>
        <div class="mb-3">
            <label class="form-label">Yorum:</label>
            <textarea name="yorum_metni" class="form-control" required></textarea>
        </div>
        <button type="submit" name="gonder" class="btn btn-primary">Yorum Ekle</button>
    </form>
    <?php
    if (isset($_POST['gonder'])) {
        $ekle = $db->prepare("INSERT INTO yorumlar (urun_id, kullanici_id, yorum_metni, puan, tarih) VALUES (?, 1, ?, ?, GETDATE())");
        $ekle->execute([$_POST['urun_id'], $_POST['yorum_metni'], $_POST['puan']]);
        echo '<div class="alert alert-success mt-3">Yorum eklendi.</div>';
    }
    ?>
</div>
</body>
</html>
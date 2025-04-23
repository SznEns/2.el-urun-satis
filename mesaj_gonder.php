<?php include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Gönder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Mesaj Gönder</h2>
    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Alıcı ID:</label>
            <input type="number" name="alici_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mesaj:</label>
            <textarea name="mesaj_metni" class="form-control" required></textarea>
        </div>
        <button type="submit" name="gonder" class="btn btn-primary">Gönder</button>
    </form>
    <?php
    if (isset($_POST['gonder'])) {
        $ekle = $db->prepare("INSERT INTO mesajlar (gonderen_id, alici_id, mesaj_metni, gonderim_tarihi) VALUES (1, ?, ?, GETDATE())");
        $ekle->execute([$_POST['alici_id'], $_POST['mesaj_metni']]);
        echo '<div class="alert alert-success mt-3">Mesaj gönderildi.</div>';
    }
    ?>
</div>
</body>
</html>
<?php include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Giriş Yap</h2>
    <form method="POST" class="mt-3">
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Şifre:</label>
            <input type="password" name="sifre" class="form-control" required>
        </div>
        <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
    </form>
    <?php
    if (isset($_POST['giris'])) {
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];
        $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE email=? AND sifre=?");
        $sorgu->execute([$email, $sifre]);
        echo $sorgu->rowCount() > 0 ? '<div class="alert alert-success mt-3">Giriş başarılı!</div>' : '<div class="alert alert-danger mt-3">Hatalı giriş!</div>';
    }
    ?>
</div>
</body>
</html>
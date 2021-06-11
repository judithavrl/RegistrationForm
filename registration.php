<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration Peserta Ujian</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" action="" method="post">
        <h1 class="login-title">Pendaftaran Peserta Ujian</h1>
        <input type="text" class="login-input" name="Nama" placeholder="Nama Peserta" required />
        <input type="text" class="login-input" name="NIM" placeholder="NIM" required />
        <input type="text" class="login-input" name="MataKuliah" placeholder="Mata Kuliah">
        <input type="text" class="login-input" name="NoHP" placeholder="No Handphone">
        <a href="success.php">
        <input type="submit" name="submit" value="Register" class="login-button">
        </a>
        <p class="link">Kirim bukti bayar yang sudah divalidasi dalam bentuk foto/scan ke email: ujian2019@gmail.com</p>
    </form>
</body>
</html>

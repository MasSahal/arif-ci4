<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Halaman <?= $nama ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    </style>
</head>
<body style="background:grey;">
    <div class="container">
        <div class="content">
            <h2 style="background:black;color:white;padding:10px;margin:10px;text-align:center;">Selamat datang di halaman pertama CI4</h2>
            <div class="box">
                <h3 style="background:orange;color:white;padding:10px;margin:10px;text-align:center;">
                    Nama : <?= $nama?><br>
                    Kelas : XII RPL <br>
                    Alamat : Wanakaya Blok Grogol
                </h3>

            </div>
        </div>
    </div>

</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("/public/bootstrap/css/bootstrap.min.css") ?>">

    <title>Welcome</title>
</head>
<body class="bg-dark">
    <div class="container pt-3 my-3 bg-primary text-white text-center">
        <h1 class="text-center">Selamat Datang di Halaman Pertama </h1>
        <h3>Hello nama saya <?= $nama?> kelas XII RPL </h3>
    </div>

    <script src="<?= base_url("/public/jquery/jquery-3.5.1.min.js") ?>"></script>
    <script src="<?= base_url("/public/popper/popper.js") ?>"></script>
    <script src="<?= base_url("/public/bootstrap/js/bootstrap.js") ?>"></script>

</body>

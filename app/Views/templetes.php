<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/public/bootstrap/css/bootstrap.min.css') ?>">

    <title>Welcome</title>
</head>
<body class="bg-warning">
    <div class="clearfix">
        <br>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="container">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                    Menu
                    </a>
                    <a href="<?= base_url('/')?>" class="list-group-item list-group-item-action">Home</a>
                    <a href="<?= base_url('/kategori')?>" class="list-group-item list-group-item-action">Kategori</a>
                    <a href="<?= base_url('/article')?>" class="list-group-item list-group-item-action">Artikel</a>
                </div>
            </div>
        </div>
            <div class="col-md-9">
            <div class="container">
                <h2> <?= $this->renderSection("title")?></h2>
                <?= $this->renderSection("content")?>
                <hr>
                Copyright &copy; 2020
            </div>
        </div>
    </div>
    

    <script src="<?= base_url('/public/jquery/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('/public/popper/popper.js') ?>"></script>
    <script src="<?= base_url('/public/bootstrap/js/bootstrap.js') ?>"></script>

</body>

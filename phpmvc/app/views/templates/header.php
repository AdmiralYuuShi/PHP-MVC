<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="<?= BASEURL ?>" class="navbar-brand">Hapid Moch Jamil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a href="<?= BASEURL ?>" class="nav-item nav-link">Home<span class="sr-only">(current)</span></a>
                <a href="<?= BASEURL ?>/about" class="nav-item nav-link">About</a>
            </div>
        </div>
    </div>
</nav>
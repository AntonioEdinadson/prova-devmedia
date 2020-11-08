<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <title>Noticias.com</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="img-logo">
                <a href="./"> <img src="assets/img/logo.png" alt=""></a>
            </div>
            <div class="menu">
                <nav class="menu-content">
                    <ul class="menu-item">
                        <div class="menu-desktop">
                            <li><a href="criar.php">Cadastrar Noticias</a></li>
                            <li><a href="./">Exibir Noticias</a></li>
                        </div>
                        <form action="" method="get">
                            <div class="input-item">
                                <input type="search" name="search" placeholder="Titulo do post">
                                <label for="sear">
                                    <div class="icon-sear">
                                        <img src="assets/img/loupe.png" alt="">
                                    </div>
                                    <input type="submit" value="" hidden id="sear">
                                </label>
                            </div>
                        </form>
                    </ul>
                    <div class="menu-mobile">
                        <div class="icon-menu" id="icon">
                            <img src="assets/img/menu.png" alt="">
                        </div>
                        <ul class="menu-mo toggle" id="menu">
                            <li><a href="criar.php">Cadastrar Noticias</a></li>
                            <li><a href="./">Exibir Noticias</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

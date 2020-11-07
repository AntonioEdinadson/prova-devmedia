<?php
include __DIR__ . "/includes/header.php";
?>
<div class="site-container">
    <div class="site-content">
        <div class="post-item">
            <div class="item">
                <div class="titulo">
                    <a href="noticia.php?id=<?= '25' ?>"><?= 'Titulo da Noticia' ?></a>
                </div>
                <div class="descricao">
                    <p><?= '
                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                       Iusto assumenda laborum quis asperiores enim dolore neque 
                       officiis laudantium voluptatum, accusantium voluptas aliquid 
                       fuga atque alias labore modi? Nemo, incidunt nesciunt?
                    ' ?></p>
                </div>
                <div class="btn-ver">
                    <a href="noticia.php?id=<?= '25' ?>">Acessar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . "/includes/footer.php"; ?>
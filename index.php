<?php
include __DIR__ . "/includes/header.php";
require __DIR__ . "/functions.php";

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = filter_var($_GET['search'], FILTER_SANITIZE_STRIPPED);
    $lista = findAll($search);

} else {
    $lista = findAll();
}

?>
<div class="site-container">
    <div class="site-content">
        <div class="post-item">
            <?php foreach ($lista as $item) : ?>
                <div class="item">
                    <div class="titulo">
                        <a href="noticia.php?id=<?= $item['id'] ?>"><?= $item['titulo'] ?></a>
                    </div>
                    <div class="descricao">
                        <p><?= $item['descricao'] ?></p>
                    </div>
                    <div class="btn-ver">
                        <a href="noticia.php?id=<?= $item['id'] ?>">Acessar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include __DIR__ . "/includes/footer.php"; ?>
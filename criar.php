<?php
include __DIR__ . "/includes/header.php";
require __DIR__ . "/functions.php";

if(isset($_POST['btn'])) {
    if(!empty($_POST['titulo']) && !empty($_POST['desc'])) {
        $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRIPPED);
        $desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRIPPED);
        $post = inserirPost($titulo, $desc);
    }
}

?>
<div class="cadastrar">
    <div class="cad-content">
        <form action="" method="post">
            <div class="input-item">
                <input type="text" name="titulo" placeholder="titulo">
            </div>
            <div class="input-item">
                <textarea name="desc" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input-item btn">
                <input type="submit" name="btn" value="Criar">
            </div>
        </form>
    </div>
</div>
<?php include __DIR__ . "/includes/footer.php"; ?>
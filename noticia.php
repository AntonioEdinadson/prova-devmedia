<?php
include __DIR__ . "/includes/header.php";
require __DIR__ . "/functions.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_STRIPPED);
}

$post = find($id);
?>
<div class="noticia">
   <div class="noticia-content">
       <h1><?= $post['titulo'] ?></h1>
       <div class="desc">
           <p><?= $post['descricao'] ?></p>
       </div>
   </div>
</div>
<?php include __DIR__ . "/includes/footer.php"; ?>
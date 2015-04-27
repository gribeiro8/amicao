<?php
  $paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<div class="menuAdmin">
    <a href="admin.php">Início</a>|<a href="admin_animais.php" class=<?php if ($paginaAtual == "admin_animais.php"){ echo "active "; }?> >Animais</a>|<a href="admin_blog.php" class=<?php if ($paginaAtual == "admin_blog.php"){ echo "active "; }?> >Blog</a>|<a href="admin_denuncia.php" class=<?php if ($paginaAtual == "admin_denuncia.php"){ echo "active "; }?> >Denúncia</a>
</div>
<?php
    ob_start();

 ?>

 <h2>Проект MVC технологии. Фильмы</h2>
 <article>
    <p>
        Просмотр списка фильмов и детальной информации по одному фильму
    </p>
 </article>
 <?php
    $content = ob_get_clean();
  ?>
  <?php include 'view/templates/layout.php';?>
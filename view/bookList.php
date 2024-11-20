<?php
    ob_start();
 ?>
 <h2>Список фильмов</h2>
 <?php
 foreach ($booksList as $bookOne) {
    echo '<article>';
    echo '<h3>';
    echo '<a href = "book?title='.$bookOne["title"].'">'.$bookOne['title'].'</a>';
    echo '</h3>';
    echo '<img src = "public/images/'.$bookOne['poster'].'">';
    echo '<p>Author(s): '.$bookOne['director'].'</p>';
    echo '<p style = "padding-top:10px;">';
    echo '<a href="book?title='.$bookOne['title'].'" role="button"> Содержание &raquo;</a>';
    echo '</article>';
    echo '<div style = "clear:both;"></div>';
 }

  ?>


  <?php
  $content = ob_get_clean();
  include 'view/templates/layout.php';
   ?>
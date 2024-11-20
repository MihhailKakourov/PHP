<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$book['title'].'</h3>';
    echo '<img src = "public/images/'.$book['poster'].'">';
    echo '<p>Authro(s): '.$book['director'].'</p>';
    echo '<p>Содержание: '.$book['description'].'</p>';
    echo '<p style="padding-top:10px;"></p>';
    echo '<a href="books" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';


    echo '<div style = "clear:both;"></div>';

    $content = ob_get_clean();

include 'view/templates/layout.php';


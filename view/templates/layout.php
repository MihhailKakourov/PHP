<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="КиноБаза - это портал о кино">
    <meta name="keywords" content="фильмы, фильмы онлайн, hd">
    <title>Контакты</title>
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <main class="main">
      <header class="header">
        <figure class="logo">
          <div class="logo_text">
            <h1>
              <a href="index.html">КиноБаза</a>
            </h1>
            <h2>Кино - наша страсть!</h2>
          </div>
        </figure>
        <nav class="menubar">
          <ul class="menu">
            <li>
              <a href="index.html">Главная</a>
            </li>
            <li class="selected">
              <a href="films.html">Фильмы</a>
            </li>
            <li>
              <a href="show.html">Сериалы</a>
            </li>
            <li>
              <a href="rating.html">Рейтинг фильмов</a>
            </li>
            <li>
              <a href="contact.html">Контакты</a>
            </li>
          </ul>
        </nav>
      </header>
      <section class="site_content">
        <aside class="sidebar_container">
          <section class="sidebar">
            <h2>Поиск</h2>
            <form method="post" action="#" id="search_form">
              <input type="search" name="search_field" placeholder="ваш запрос">
              <input type="submit" class="btn" value="найти">
            </form>
          </section>
          <section class="sidebar">
            <h2>Вход</h2>
            <form method="post" action="#" id="login">
              <input type="text" name="login_field" placeholder="логин">
              <input type="text" name="password_field" placeholder="пароль">
              <input type="submit" class="btn" value="вход">
              <div class="lables_passreg_text">
                <span>
                  <a href="#">забыли пароль?</a>
                </span> | <span>
                  <a href="#">регистрация</a>
                </span>
              </div>
            </form>
          </section>
          <section class="sidebar">
            <h2>Новости</h2>
            <span>31.02.2018</span>
            <p>Мы запустили расширенный поиск</p>
          </section>
          <section class="sidebar">
            <h2>Рейтинг фильмов</h2>
            <ul>
              <li>
                <a href="show.html">Интерстеллар</a>
                <span class="rating_sidebar">8.1</span>
              </li>
              <li>
                <a href="#">Матрица</a>
                <span class="rating_sidebar">8.0</span>
              </li>
              <li>
                <a href="#">Безумный Макс</a>
                <span class="rating_sidebar">7.5</span>
              </li>
              <li>
                <a href="#">Облачный атлас</a>
                <span class="rating_sidebar">7.4</span>
              </li>
            </ul>
          </section>
        </aside>
        <section class="content" id="content">
            <?php
                echo $content;
            ?>
        </section>
      </section>
      <footer class="footer">
        <p>
          <a href="index.html">Главная</a> | <a href="films.html">Фильмы</a> | <a href="#">Сериалы</a> | <a href="rating.html">Рейтинг фильмов</a> | <a href="contact.html">Контакты</a>
        </p>
        <p>kinobaza.ee</p>
      </footer>
    </main>
  </body>
</html>
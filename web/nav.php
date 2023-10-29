<?php session_start();?>
  <div class="navigation">
      <p><a href="/site">Главная страница</a>
      <?php if(!$_SESSION['username']){
        echo "<a href='login.php'> | Выполнить вход / Регистрация | </a>";
      } ?>
      <?php if($_SESSION['username']){
        echo "<a href='index.php'>| Панель администратора</a>
        | Добро пожаловать, ".$_SESSION['username'];
        echo "<a href='logout.php'> | Выйти </a></p>";
      }
      ?>
      </div>
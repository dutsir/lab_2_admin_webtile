<?php
// подключаем заглушку БД (потом пригодится)
include_once __DIR__ . '/db.php';

// если забыли задать на странице — считаем, что не залогинен
if (!isset($is_logged_in)) {
    $is_logged_in = false;
}

// заголовок вкладки браузера
if (!isset($page_title)) {
    $page_title = 'Сайт Павловой Ю.Р.';
}
?>
<!DOCTYPE html>
<html lang="ru" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <!-- Bootstrap 5 с CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- анимации при прокрутке -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- свои стили -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- верхнее меню -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Павлова Ю.Р.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <?php if (isset($active_page) && $active_page == 'home') { ?>
                        <a class="nav-link active" href="index.php">Главная</a>
                    <?php } else { ?>
                        <a class="nav-link" href="index.php">Главная</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <?php if (isset($active_page) && $active_page == 'posts') { ?>
                        <a class="nav-link active" href="posts.php">Мои посты</a>
                    <?php } else { ?>
                        <a class="nav-link" href="posts.php">Мои посты</a>
                    <?php } ?>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php
                // меню справа зависит от того, залогинен пользователь или нет
                // делаю два отдельных if — так проще понимать, пусть код повторяется
                if ($is_logged_in == true) {
                    ?>
                    <li class="nav-item">
                        <?php if (isset($active_page) && $active_page == 'logout') { ?>
                            <a class="nav-link active" href="logout.php">Выйти</a>
                        <?php } else { ?>
                            <a class="nav-link" href="logout.php">Выйти</a>
                        <?php } ?>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <?php if (isset($active_page) && $active_page == 'login') { ?>
                            <a class="nav-link active" href="login.php">Войти</a>
                        <?php } else { ?>
                            <a class="nav-link" href="login.php">Войти</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($active_page) && $active_page == 'register') { ?>
                            <a class="nav-link active" href="registration.php">Регистрация</a>
                        <?php } else { ?>
                            <a class="nav-link" href="registration.php">Регистрация</a>
                        <?php } ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container flex-grow-1 pb-4">

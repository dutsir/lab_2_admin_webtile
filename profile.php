<?php
// профиль — пока всегда как для "своего" аккаунта, статичные данные
$is_logged_in = false;
$page_title = 'Профиль — Павлова Ю.Р.';
$active_page = 'profile';

include 'includes/header.php';
?>

<h1 class="h3 mb-4">Профиль пользователя</h1>

<div class="card shadow-sm border-0 max-w-lg" style="max-width: 32rem;">
    <div class="card-body p-4">
        <p class="mb-2"><strong>Логин:</strong> pavlova_yulia</p>
        <p class="mb-4"><strong>Email:</strong> y.pavlova@example.com</p>
        <a href="logout.php" class="btn btn-outline-secondary">Выйти</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

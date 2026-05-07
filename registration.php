<?php
// страница регистрации
$is_logged_in = false;
$page_title = 'Регистрация — Павлова Ю.Р.';
$active_page = 'register';

include 'includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <h1 class="h3 mb-4 text-center">Регистрация</h1>
        <div class="card shadow border-0">
            <div class="card-body p-4">
                <form method="post" action="registration.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                        <label for="login">Логин</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email">
                        <label for="email_user">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" name="parol" id="parol" placeholder="Пароль">
                        <label for="parol">Пароль</label>
                    </div>
                    <button type="submit" class="btn btn-accent w-100 mb-3">Зарегистрироваться</button>
                </form>
                <p class="text-center mb-0 small">
                    <a href="login.php">Уже есть аккаунт? Войти</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

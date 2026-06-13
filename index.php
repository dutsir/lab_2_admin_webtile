<?php
$is_logged_in = false;
// главная страница — лабораторная работа №2
// имитация авторизации: потом значение будет браться из сессии или БД


$page_title = 'Главная — Павлова Ю.Р.';
$active_page = 'home';

include 'includes/header.php';
?>

<?php
// проверяем, залогинен ли пользователь ну чтото типо такого
if ($is_logged_in == false) {
  
    ?>
    <section class="hero-welcome p-4 p-md-5 mb-5 shadow" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold mb-3">Добро пожаловать на сайт Павловой Ю. Р.</h1>
                <p class="lead mb-4 opacity-90">
             
                    Пока всё статическое, обработка на PHP и база данных появятся позже.
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="login.php" class="btn btn-light btn-lg">Войти</a>
                    <a href="registration.php" class="btn btn-accent btn-lg">Регистрация</a>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    // --- залогинен: форма нового поста и лента ---
    ?>
    <h2 class="mb-4 text-accent">Добавить новый пост</h2>

    <form class="card shadow-sm border-0 mb-5 p-4" method="post" action="index.php" enctype="multipart/form-data">
        <p class="text-muted small mb-3">Форма пока ни на что не отправляется — заглушка для следующей лабы.</p>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Заголовок">
            <label for="post_title">Заголовок</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="post_text" id="post_text" placeholder="Текст" style="height: 8rem;"></textarea>
            <label for="post_text">Текст поста</label>
        </div>
        <div class="mb-3">
            <label for="post_image" class="form-label">Картинка</label>
            <input type="file" class="form-control" name="post_image" id="post_image" accept="image/*">
            <div class="mt-2">
                <img id="previewImg" src="" alt="" class="rounded border" style="max-height: 160px; display: none;">
            </div>
        </div>
        <button type="submit" class="btn btn-accent">Опубликовать</button>
    </form>

    <h3 class="mb-3">Последние посты</h3>
    <p class="text-muted small">Ниже — примеры карточек, от новых к старым (просто порядок в коде).</p>

    <div class="row g-4">
        <?php
        // я ненавижу пхп и все что с ним связано одни мысли о пхп убивают во мне душу и все желение жить что у меня есть   
        //вывод без htmlspecialchars — так задумано для будущей лабы про XSS блять как же ненавижу этот пхп
        $post_title = 'Сегодня сдала черновик отчёта';
        $post_text = 'Наконец-то отправила преподавателю. Надеюсь, замечаний будет немного.';
        ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card post-card h-100">
                <img src="https://picsum.photos/400/200?random=11" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title; ?></h5>
                    <p class="card-text small text-muted"><?php echo htmlspecialchars($post_text); ?></p>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Удалить
                    </button>
                </div>
            </div>
        </div>

        <?php
        $post_title = 'Первый день с Bootstrap 5';
        $post_text = 'Разбиралась с сеткой и карточками — удобно, но классов много.';
        ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card post-card h-100">
                <img src="https://picsum.photos/400/200?random=22" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title; ?></h5>
                    <p class="card-text small text-muted"><?php echo htmlspecialchars($post_text); ?></p>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Удалить
                    </button>
                </div>
            </div>
        </div>

        <?php
        $post_title = 'Заметки по PHP: include и переменные';
        $post_text = 'Поняла, что переменные до include видны внутри подключаемого файла.';
        ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card post-card h-100">
                <img src="https://picsum.photos/400/200?random=33" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title; ?></h5>
                    <p class="card-text small text-muted"><?php echo htmlspecialchars($post_text); ?></p>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Удалить
                    </button>
                </div>
            </div>
        </div>

        <?php
        $post_title = 'Старый пост: верстка таблицами <b>(не надо так)</b>';
        $post_text = 'Оставила для истории — сейчас учусь на флексах и Bootstrap.';
        ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card post-card h-100">
                <img src="https://picsum.photos/400/200?random=44" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post_title; ?></h5>
                    <p class="card-text small text-muted"><?php echo htmlspecialchars($post_text); ?></p>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Удалить
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Удаление поста</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    Вы уверены, что хотите удалить этот пост? (это только демонстрация окна)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Да, удалить</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // самый простой предпросмотр картинки из файла ну вроде как работет 
        var inputFile = document.getElementById('post_image');
        var preview = document.getElementById('previewImg');
        if (inputFile && preview) {
            inputFile.addEventListener('change', function () {
                var file = this.files[0];
                if (!file) {
                    preview.style.display = 'none';
                    preview.src = '';
                    return;
                }
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'inline-block';
                };
                reader.readAsDataURL(file);
            });
        }
    </script>
    <?php
}
?>

<?php include 'includes/footer.php'; ?>

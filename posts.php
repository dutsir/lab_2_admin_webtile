<?php
// все посты — статический список + фальшивая пагинация
$is_logged_in = false;
$page_title = 'Мои посты — Павлова Ю.Р.';
$active_page = 'posts';

include 'includes/header.php';
?>

<h1 class="h3 mb-4 text-accent"><i class="bi bi-collection me-2"></i>Мои посты</h1>

<div class="row g-4 mb-4">
    <?php
    $post_title = 'Новый семестр — новые лабораторные';
    ?>
    <div class="col-md-6" data-aos="fade-up">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=101" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Собралась с силами и открыла учебник по веб-разработке.'); ?></p>
            </div>
        </div>
    </div>

    <?php $post_title = 'Как я настраивала OpenServer'; ?>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="50">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=102" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Пару раз перезапускала Apache, пока всё заработало.'); ?></p>
            </div>
        </div>
    </div>

    <?php $post_title = 'CSS: когда margin схлопывается'; ?>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=103" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Запуталась, потом прочитала статью — стало понятнее.'); ?></p>
            </div>
        </div>
    </div>

    <?php $post_title = 'Первый раз подключила Bootstrap по CDN'; ?>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=104" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Быстро, но интернет на паре иногда подводит.'); ?></p>
            </div>
        </div>
    </div>

    <?php $post_title = 'Заметка: не забывать закрывать теги'; ?>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=105" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Валидатор ругался на одну лишнюю кавычку — искала долго.'); ?></p>
            </div>
        </div>
    </div>

    <?php $post_title = 'Старый черновик: идеи для портфолио'; ?>
    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
        <div class="card post-card h-100">
            <img src="https://picsum.photos/400/200?random=106" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $post_title; ?></h5>
                <p class="card-text small text-muted"><?php echo htmlspecialchars('Пока только список, но когда-нибудь сделаю красиво.'); ?></p>
            </div>
        </div>
    </div>
</div>

<nav aria-label="Навигация по страницам постов" class="d-flex justify-content-center gap-2 my-4">
    <span class="btn btn-outline-secondary disabled">← Назад</span>
    <span class="btn btn-accent disabled">Страница 1</span>
    <a class="btn btn-outline-secondary" href="#">Вперед →</a>
</nav>

<?php include 'includes/footer.php'; ?>

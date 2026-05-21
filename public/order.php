<?php require_once "script.php"; ?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Заказать экскурсию</title>

    <link rel="icon" href="img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark container">

        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/logo.png" width="40" class="me-2">
            Музеи мира
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Главная</a>
            <a class="nav-link" href="catalog.php">Каталог</a>
            <a class="nav-link active" href="order.php">Экскурсия</a>
        </div>

    </nav>

</header>

<main class="container mt-5">

    <h1 class="text-center mb-4">
        Заказать индивидуальную экскурсию
    </h1>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <form id="orderForm">

                <div class="mb-3">
                    <label class="form-label">Ваше имя</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон</label>

                    <input
                        type="tel"
                        name="phone"
                        class="form-control"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required
                    >
                </div>

                <div class="mb-3">

                    <label class="form-label">Музей</label>

                    <select name="museum" class="form-select">

                        <option>Лувр</option>
                        <option>Эрмитаж</option>
                        <option>Британский музей</option>

                    </select>

                </div>

                <button type="submit" class="btn btn-dark w-100">
                    Отправить
                </button>

            </form>

        </div>

    </div>

    <hr class="my-5">

    <h2 class="mb-4">
        Список заявок
    </h2>

    <button id="loadOrders" class="btn btn-dark mb-3">
        Обновить список
    </button>

    <div id="ordersList"></div>

</main>

<footer class="bg-dark text-white text-center p-4 mt-5">
    <p>© 2026 Музеи мира</p>
</footer>

<div class="modal fade" id="resultModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Результат</h5>
            </div>

            <div class="modal-body" id="modalText"></div>

            <div class="modal-footer">
                <button class="btn btn-dark" data-bs-dismiss="modal">
                    OK
                </button>
            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>
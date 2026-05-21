<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Каталог музеев</title>

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
            <a class="nav-link active" href="catalog.php">Каталог</a>
            <a class="nav-link" href="order.php">Экскурсия</a>
        </div>

    </nav>

</header>

<main class="container mt-5">

    <h1 class="text-center mb-5">
        Каталог музеев мира
    </h1>

    <input
        type="text"
        id="search"
        class="form-control mb-4"
        placeholder="Поиск музея..."
    >

    <button id="updateMuseums" class="btn btn-dark mb-4">
        Обновить каталог
    </button>

    <div
        id="museumList"
    ></div>

</main>

<footer class="bg-dark text-white text-center p-4 mt-5">
    <p>© 2026 Музеи мира</p>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>
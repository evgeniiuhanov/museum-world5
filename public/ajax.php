<?php

require_once "script.php";

header("Content-Type: application/json");

// ================= GET =================

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $museums = getMuseums($conn);

    echo json_encode($museums);

}

// ================= POST =================

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $museum = $_POST['museum'];

    $result = saveOrder($conn, $name, $phone, $email, $museum);

    if ($result) {

        echo json_encode([
            "status" => "success",
            "message" => "Заявка успешно отправлена"
        ]);

    } else {

        echo json_encode([
            "status" => "error",
            "message" => "Ошибка при отправке"
        ]);

    }

}
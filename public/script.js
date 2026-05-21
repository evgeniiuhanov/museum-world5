document.addEventListener("DOMContentLoaded", function () {

    // ================= AJAX КАТАЛОГ =================

    function loadMuseums() {

    $.ajax({

        url: "ajax.php",

        method: "GET",

        cache: false,

        dataType: "json",

        success: function (data) {

            let html = "";

            data.forEach(function (museum) {

                html += `
                    <div class="col museum-card">

                        <div class="card h-100">

                            <img
                                src="${museum.image}"
                                class="card-img-top"
                            >

                            <div class="card-body text-center">

                                <h5>${museum.name}</h5>

                                <a
                                    href="museum.php?museum=${museum.code}"
                                    class="btn btn-dark"
                                >
                                    Подробнее
                                </a>

                            </div>

                        </div>

                    </div>
                `;

            });

            $("#museumList").html(html);

        }

    });

}

    // Первая загрузка

    loadMuseums();

    // Кнопка обновления

    $("#updateMuseums").on("click", function () {

        loadMuseums();

    });

    // Автообновление каждые 10 секунд

    setInterval(loadMuseums, 3000);

    // ================= AJAX ФОРМА =================

    const orderForm = $("#orderForm");

    if (orderForm.length) {

        const modal = new bootstrap.Modal(
            document.getElementById("resultModal")
        );

        orderForm.on("submit", function (event) {

            event.preventDefault();

            $.ajax({

                url: "ajax.php",

                method: "POST",

                data: orderForm.serialize(),

                success: function (response) {

                    $("#modalText").text(response.message);

                    modal.show();

                    orderForm[0].reset();

                },

                error: function () {

                    $("#modalText").text("Ошибка AJAX");

                    modal.show();

                }

            });

        });

    }

});
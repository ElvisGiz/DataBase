<?
require "header.php";
?>
<form id="myform" action="" method="post">
    <input type="text" placeholder="имя" name="name" value="<?=$_POST["name"]?>">
    <input type="text" placeholder="сообщение" name="text" value="<?=$_POST["text"]?>">
    <input id="myclick" type="submit">
</form>
    <div id="result_form"></div>
<script>
    $( document ).ready(function() {
        $("#myclick").click(
            function(){
                sendAjaxForm('result_form', 'myform', 'ajax/form.php');
                return false;
            }
        );
    });

    function sendAjaxForm(result_form, myform, url) {
        $.ajax({
            url:     url, //url страницы (action_ajax_form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#"+myform).serialize(),  // Сеарилизуем объект
            success: function(response) { //Данные отправлены успешно
                $('.modal1').addClass('show');
                $('.modal1').show();
            },
            complete: function (data) { //когда модалку надо закрыть, очистить данные
                $("#modal_btn1").on("click", function () {
                    $('.modal1').hide();

                });
                $("#modal_btn21").on("click", function () {
                    $('.modal1').hide();

                })


            },
            error: function(response) { // Данные не отправлены
                $('#result_form').html('Ошибка. Данные не отправлены.');
            }
        });
    }
</script>
    <div class="modal1 fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" id="modal_btn1" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Ваше сообщение успешно отправлено!
                </div>

            </div>
        </div>
    </div>

<?php
require "footer.php";

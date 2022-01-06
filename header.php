<html>
<head>
<meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <script>
        //модалка через аякс
        $(function(){

            $(".ajax").on("click",function () {

                let id = $(this).data('id');
                console.log(id)
                $.ajax({
                    url: '/ajax/modal.php',
                    type: 'POST',
                    data: {
                        'id': id
                    },
                    success: function(data) { //когда данные переданы в обработчик, открыть модалку
                        $('#modalAjax').html(data);
                        $('.modal').addClass('show');
                        $('.modal').show();

                    },
                    complete: function (data) { //когда модалку надо закрыть, очистить данные
                        $("#modal_btn").on("click", function () {
                            $('.modal').hide();

                        });
                        $("#modal_btn2").on("click", function () {
                            $('.modal').hide();

                        })


                    }
                })

            })

        });
    </script>
</head>
<body>
<?if($_SERVER["REQUEST_URI"]=="/" || $_SERVER["REQUEST_URI"]=="/index.php"){?>
<?}else{?>
        <div style="margin-bottom: 10px"><a href="/">На главную</a></div>

    <br>
<?}


?>


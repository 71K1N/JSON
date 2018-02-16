$(document).ready(function () {

    //envia dados apos validar formulario
    $("#enviar").click(function () {
        $("#formulario").validate({
            submitHandler:function (form) {
                var obj = new Object();

                obj.nome    =   $("#nome").val();
                obj.campo2  =   $("#campo2").val();
                obj.campo3  =   $("#campo3").val();

                var dados=  JSON.stringify(obj);

                $.ajax({
                    type: "POST",
                    url: "processa.php",
                    data: {'login':dados},
                    success: function( data )
                    {
                        $("#resultado").show();
                        $("#mensagem").html(data);
                    }
                });

            }

        } )


    })


})

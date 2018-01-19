<!DOCTYPE html>
<html>
    <head>
    <title>TESTE JSON</title>
    </head>
    <body>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form method="post" action="index.php" id="formulario">
                NOME <br>
                <input class="form-control" type="text" id="nome"><br>
                CAMPO2<br>
                <input class="form-control" type="text" id="campo2"><br>
                CAMPO3<br>
                <input class="form-control" type="text" id="campo3"><br>
                <input class="btn btn-primary" type="submit" id="enviar">
            </form>

        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div id="resultado"  class="alert alert-danger" hidden>
                <p> RETORNO JSON</p>
                <p id="mensagem"></p>
            </div>

        </div>
        <div class="col-md-4" >

        </div>
    </div>


    <!--    BOOTSTRAP  -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    SCRIPT     -->
    <script language="JavaScript" src="js/jquery.js" type="text/javascript">            </script>
    <script language="JavaScript" src="js/jquery.validate.js" type="text/javascript">   </script>
    <script language="JavaScript" src="js/index.js" type="text/javascript">             </script>
    </body>
</html>
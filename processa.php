<?php
if (isset($_POST['login'])){
    $login = json_decode($_POST['login']);
    echo $login->nome."<br>";
    echo $login->campo2."<br>";
    echo $login->campo3."<br>";

}



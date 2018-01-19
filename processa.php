<?php
if (isset($_POST['login'])){
    $login = json_decode($_POST['login']);
    echo $login->nome;
}



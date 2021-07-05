<?php

//данные БД
$dbhost = 'localhost';
$dbuser = 'local';
$dbpass = '87654321';
$dbname = 'qwut';

//соединяемся с БД
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //вывод возможных ошибок mysql
$mysql = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
mysqli_set_charset($mysql,'utf8');

function config($config) {
    $get_config = mysqli_fetch_array(mysqli_query("select * data"));
    $config = $get_config[$config];
    return $config;
}

function access() {
    $mysql = mysqli_connect('localhost','local','87654321','qwut') or die();
    if($_COOKIE['login']){
        $login = $_COOKIE['login'];
        $pass = $_COOKIE['pass'];
        $checkuser = mysqli_query($mysql, "SELECT * FROM adm WHERE login='$login' AND pass='$pass'");
        $returned = mysqli_num_rows($checkuser);
        mysqli_free_result($checkuser); //закрытие выборки
        if($returned=="1"){
            //вход выполнен
        }
        else{ //возврат на попытку входа если логин/пароль ВВЕДЕНЫ неверные
            include("template.php");
            echo $header; //форма логин/пароль
            exit;
            mysqli_free_result($mysql);
        }

    }else{ //возврат если логин/пароль не существуют
            include("template.php");
            echo $header; //форма логин/пароль
            exit;
            mysqli_free_result($mysql);
    }
}
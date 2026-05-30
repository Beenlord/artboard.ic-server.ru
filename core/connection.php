<?php

include 'libs/rb/rb-mysql.php';
R::setup('mysql:host=localhost;dbname=artboard', 'root', '');

if (!R::testConnection())
{
    exit('Нет соединения с базой данных!');
}
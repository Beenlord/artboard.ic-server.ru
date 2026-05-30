<?php

// Core
include 'core/main.php';
include 'moduls/head.php';

echo '<body class="page">';

$blocks = array(
    Lang("art", "картны"),
    Lang("contacts", "контакты")
);

// Contant
include 'moduls/sections/header.php';
include 'moduls/sections/art.php';
include 'moduls/sections/contacts.php';
include 'moduls/sections/footer.php';
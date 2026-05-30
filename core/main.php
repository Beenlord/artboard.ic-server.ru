<?php

include 'connection.php';
$content = array();

session_start();
if (!isset($_SESSION['location'])) {
    $_SESSION['location'] = "en";
}

if ($_SERVER['REQUEST_URI'] === '/') {
    // For index page
    $content['ctg'] = GetData('ctg', null);
    $content['art'] = GetData('art', null);
} else {
    if (isset($_GET['id'])) {
        $content['prev'] = GetData('art', array(
            "column" => "id",
            "value" => $_GET['id']
        ));
        $content['art'] = GetData('art', array(
            "column" => "id_ctg",
            "value" => $content['prev'][0]['id_ctg']
        ));
    } else {
        header('Location: /');
    }
}

function GetData($table, $selector) {
    $query = "SELECT * FROM $table";
    if ($selector !== null) {
        $query = "$query WHERE " . $selector['column'] . " LIKE " . $selector['value'];
    }
    return R::getAll($query);
}

function Lang($en, $ru) {
    switch ($_SESSION['location']) {
        case 'en':
            return $en;
            break;
        case 'ru':
            return $ru;
            break;
    }
}
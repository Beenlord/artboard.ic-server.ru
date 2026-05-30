<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="02a88b14c90c8acd">

    <!-- SEO -->
    <?php
        echo '<title>';
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo 'Александр Фомин | Персональный сайт художника';
        } else {
            echo 'Картина ' . $content['prev'][0]['title'] . ' - ' . $content['prev'][0]['description'];
        }
        echo '</title>';
    ?>
    <meta property='og:image” content='<?=$content['prev'][0]['url']?>'>
    <meta property='og:image” content='<?=$content['prev'][0]['url']?>'>
    <meta property='og:image” content='<?=$content['prev'][0]['url']?>'>
    <meta name="keywords">
    <meta name="description" content="Привет, меня зовут Александр Фомин! Я художник с Крымской набережной в городе Москва. Мои картины имеют уникальную ценность в сфере искусства, так как к кажой из них я подхожу с умом, душой и кистью.">
    <!-- SEO -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
                .insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(61518067, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/61518067" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="design/main.css">
    <link rel="stylesheet" href="design/media.css">

    <script type="text/javascript" src="core/libs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="core/script.js"></script>
</head>
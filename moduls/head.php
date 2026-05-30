<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="02a88b14c90c8acd">

    <!-- SEO -->
    <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<title>Александр Фомин | Персональный сайт художника</title>';
            echo '<meta name="description" content="Привет, меня зовут Александр Фомин! Я художник с Вернисажа в городе Москва.">';
            echo '<meta property="og:image" content="images/avatar_alexander.jpg">';
        } else {
            echo '<title>Картина ' . $content['prev'][0]['title'] . '</title>';
            echo '<meta property="og:image" content=' . $content['prev'][0]['url'] . '>';
            echo '<meta name="description" content="Александр Фомин / ' . $content['prev'][0]['description'] . '">';
        }
    ?>
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
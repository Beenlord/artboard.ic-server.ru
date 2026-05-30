<section class="wrap-fill" id="home">
    <nav class="block">
        <ul class="nav-box">
        <li class="nav-box__item">
            <a href="/"><?=Lang("home", "главная")?></a>
        </li>
        <?php
            foreach ($blocks as $elem) {
                echo '<li class="nav-box__item">';
                echo '<a href="#" onclick="Scroll(`#' . $elem . '`)">' . $elem . '</a>';
                echo '</li>';
            }
        ?>
        </ul>
    </nav>
    <header class="block">
    <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<h1>Alexander Fomin</h1>';
            echo '<p class="description">' . Lang("All painting are qualitative, original and were painted in oil.", "") . '</p>';
            echo '<p class="description">' . Lang("Work experience - 25 years.", "Рабочий опыт более 25 лет.") . '</p>';
        } else {
            echo '<img src="' . $content['prev'][0]['url'] . '" alt="' . $content['prev'][0]['title'] . '">';
        }
    ?>
    </header>
    <footer class="block">
    <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<ul class="nav-box">';
            echo '<li class="nav-box__item">';
            echo '<a onclick="Scroll(`#art`)">' . Lang("show art", "мои картины") . '</a>';
            echo '</li>';
            echo '</ul>';
        } else {
            echo "<h3>" . $content['prev'][0]['title'] . "</h3>";
            echo "<p class='description'>" . $content['prev'][0]['description'] . "</p>";
        }
    ?>
    </footer>
</section>
<footer class="wrap">
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
    <div class="block">
        <p class="description">by <?=Lang("Vladimir Fomin", "Владимир Фомин")?></p>
        <p class="description">© 2019-2020</p>
    </div>
</footer>
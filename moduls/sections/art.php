<section class="wrap" id="art">
    <header class="block">
        <h2>Art board</h2>
        <p class="description">All artist art</p>
    </header>
    <?php
        if ($_SERVER['REQUEST_URI'] === '/') {
            echo '<nav class="block">';
            echo '<ul class="nav-box">';
            echo '<li class="nav-box__item">';
            echo '<a onclick="SortBy(`0.5`)">all</a>';
            echo '</li>';
            foreach ($content['ctg'] as $elem) {
                echo '<li class="nav-box__item">';
                echo '<a onclick="SortBy(`' . $elem['id'] . '`)">' . $elem['name'] . '</a>';
                echo '</li>';
            }
            echo '</ul>';
            echo '</nav>';
        }
    ?>
    <article class="block">
        <ul class="content-box" id="cnt_art">
        <?php
            foreach ($content['art'] as $elem) {
                echo '<li class="content-box__item" data-ctg="' . $elem['id_ctg'] . '">';
                echo '<a href="/preview.php?id=' . $elem['id'] . '" title="' . $elem['title'] . '">';
                echo '<img src="' . $elem['url'] . '" alt="' . $elem['title'] . '">';
                echo '</a>';
                echo '<h4 class="card-title">' . $elem['title'] . '</h4>';
                echo '<p class="card-description">' . $elem['description'] . '</p>';
                echo '</li>';
            }
        ?>
        </ul>
    </article>
    <?php if ($_SERVER['REQUEST_URI'] !== '/'): ?>
    <footer class="block">
        <ul class="nav-box">
            <li class="nav-box__item">
                <a href="/#art">SHOW MORE</a>
            </li>
        </ul>
    </footer>
    <?php endif; ?>
</section>
<?php
require './posts/posts.php';
?>

<section class="section">

    <h2 class="section__title">Title</h2>
    <?php foreach ($posts_data as $posts) : ?>
        <article class="post">
            <h3 class="post__title">
                <?= $posts['title']; ?>
            </h3>
            <p class="post__text"><?= $posts['body']; ?></p>
        </article>
    <?php endforeach; ?>

</section>
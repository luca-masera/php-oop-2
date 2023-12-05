<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Movie.php';
$movies = Movie::create();
?>
<section class="container">
    <div class="row gy-5 ">
        <?php foreach ($movies as $movie) {
            $movie->printCard();
        } ?>
    </div>
</section>
<?php
include __DIR__ . 'Views/footer.php';
?>
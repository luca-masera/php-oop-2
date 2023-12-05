<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Play.php';
$plays = Steam::createPlay();
?>
<section class="container">
    <div class="row gy-5 ">
        <?php foreach ($plays as $play) {
            $play->printSteam();
        } ?>
    </div>
</section>
<?php
include __DIR__ . 'Views/footer.php';
?>
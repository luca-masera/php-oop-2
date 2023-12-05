<?php
include __DIR__ . '/Views/header.php';
include __DIR__ . '/Model/Books.php';
$books = Book::create();
?>
<section class="container">
    <div class="row gy-5 ">
        <?php foreach ($books as $boks) {
            $boks->printLibro();
        } ?>
    </div>
</section>
<?php
include __DIR__ . 'Views/footer.php';
?>
<?php

include __DIR__ . '/Product.php';

class Book extends Product
{
    private string $title;
    private string $longDescription;
    private int $pageCount;
    private string $thumbnailUrl;


    function __construct($title, $longDescription, $thumbnailUrl, $price, $quantity)
    {
        $this->title = $title;
        $this->longDescription = $longDescription;
        $this->thumbnailUrl = $thumbnailUrl;
        parent::__construct($price, $quantity);

    }



    public function printLibro()
    {
        $image = $this->thumbnailUrl;
        $title = $this->title;
        $content = substr($this->longDescription, 0, 100) . '...';
        $price = $this->price;
        $quantity = $this->quantity;
        include __DIR__ . '/../Views/cardB.php';

    }


    public static function create()
    {
        $boksString = file_get_contents(__DIR__ . '/book_db.json');
        $boksList = json_decode($boksString, true);

        $books = [];


        foreach ($boksList as $item) {
            $books[] = new Book($item['title'], $item['longDescription'], $item['thumbnailUrl'], '12 $', '20 pezzi disponibili');

        }
        return $books;
    }

}

?>
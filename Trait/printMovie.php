<?php

trait printMovie
{
    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        $content = substr($this->overview, 0, 100) . '...';
        $custom = $this->vote_average . 'media dei voti dei clienti';
        $price = $this->price;
        $quantity = $this->quantity;
        //$genre = $this->formatGenres();
        include __DIR__ . '/../Views/card.php';

    }

}


?>
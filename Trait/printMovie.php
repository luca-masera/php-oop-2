<?php

trait printMovie
{
    public function printCard()
    {
        $image = $this->poster_path;
        $title = $this->title;
        //$content = $this->overview;
        $content = $this->longCaracter();
        $custom = $this->vote_average . 'media dei voti dei clienti';
        $price = rand(5, 40) . '$';
        $quantity = $this->quantity;
        //$genre = $this->formatGenres();
        include __DIR__ . '/../Views/card.php';

    }




    //substr($this->overview, 0, 100) . '...';
}


?>
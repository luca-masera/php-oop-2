<?php

trait printMovie
{
    public function printCard()
    {
        try {
            $this->longCaracter($this->overview);
        } catch (Exception $e) {
            $this->overview = $e->getMessage();
        }

        $image = $this->poster_path;
        $title = $this->title;
        $overview = $this->overview;
        $custom = $this->vote_average . 'media dei voti dei clienti';
        $price = rand(5, 40) . '$';
        $quantity = $this->quantity;
        //$genre = $this->formatGenres();
        include __DIR__ . '/../Views/card.php';


    }




    //substr($this->overview, 0, 100) . '...';
}


?>
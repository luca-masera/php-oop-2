<?php
//include __DIR__ . 'Genre.php';
include __DIR__ . '/Product.php';
include __DIR__ . '/../Trait/printMovie.php';

class Movie extends Product
{

    private int $id;
    private string $title;
    private string $overview;
    private float $vote_average;
    private string $poster_path;

    private string $original_language;
    //public array $genres;



    function __construct($id, $title, $overview, $vote, $image, $language, $price, $quantity) //$genres)
    {
        $this->id = $id;
        $this->title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $image;
        $this->original_language = $language;
        parent::__construct($price, $quantity);

        //$this->genres = $genres;

    }
    use printMovie;
    public function longCaracter($overview)
    {

        if (strlen($overview) > 200) {
            throw new Exception('La descrizione è troppo lunga');
        }
        $this->overview = $overview;

    }





    /*public function formatGenres()
    {
        $template = "<p>";

        for ($n = 1; $n < count($this->genres); $n++) {
            $template .= "<span>" . $this->genres[$n]->name . '- </span>';
        }
        $template .= "</p>";
        return $template;


    }*/




    public static function create()
    {
        $movieString = file_get_contents(__DIR__ . '/movie_db.json');
        $movieList = json_decode($movieString, true);

        $movies = [];


        foreach ($movieList as $item) {
            $movies[] = new Movie($item['id'], $item['title'], $item['overview'], $item['vote_average'], $item['poster_path'], $item['original_language'], '12 $', '8 pezzi disponibili');

        }
        return $movies;
    }

}

?>
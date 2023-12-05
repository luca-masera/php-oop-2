<?php

include __DIR__ . '/Product.php';

class Steam extends Product
{
    private string $name;
    private int $playtime_forever;
    private string $img_icon_url;


    function __construct($name, $playtime_forever, $img_icon_url, $price, $quantity)
    {
        $this->name = $name;
        $this->playtime_forever = $playtime_forever;
        $this->img_icon_url = $img_icon_url;
        parent::__construct($price, $quantity);

    }



    public function printSteam()
    {
        $image = $this->img_icon_url;
        $title = $this->name;
        $content = $this->playtime_forever;
        $price = $this->price;
        $quantity = $this->quantity;
        include __DIR__ . '/../Views/cardB.php';

    }


    public static function createPlay()
    {
        $playsString = file_get_contents(__DIR__ . '/steam_db.json');
        $playsList = json_decode($playsString, true);

        $plays = [];


        foreach ($playsList as $item) {
            $plays[] = new Steam($item['name'], $item['playtime_forever'], $item['img_icon_url'], '12 $', 20);

        }
        return $plays;
    }

}

?>
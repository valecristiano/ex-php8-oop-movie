<?php 

require_once 'genre.php';

class Movie {

   public function __construct(
       public string $titolo,
       public int $anno,
       public string $url,
       public Genre $genere,
       public string $descrizione
   ) {}

   public function filmRecenti (): string {
    if($this->anno > 2020) {
        return "Film recente";
    } else {
        return "Film meno recente";
    }
   }
}
?>
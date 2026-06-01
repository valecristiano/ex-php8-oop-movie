<?php 

class Movie {

   public function __construct(
       public string $_itolo,
       public int $anno,
       public string $url,
       public string $genere,
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
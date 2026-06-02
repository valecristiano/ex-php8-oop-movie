<?php 

require_once 'Genre.php';
require_once './Traits/Premiato.php';


class Movie {
    use Premiato;
    
    public function __construct(
       public string $titolo,
       public int $anno,
       public string $url,
       public array $generi,
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
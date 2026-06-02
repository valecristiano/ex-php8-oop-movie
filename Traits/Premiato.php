<?php
trait Premiato {

    public $premio;
    public $annoPremio;

    public function dettagliPremio(): string {
        if ($this->premio && $this->annoPremio) {
            return "Vincitore del premio '{$this->premio}' nel {$this->annoPremio}!";
        }
        return "Nessun premio ricevuto!";
    }
}

?>
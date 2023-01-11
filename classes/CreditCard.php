<?php
class CreditCard {
    private string $id;
    private string $number;
    private int $expiryYear;
    private int $expiryMonth;

    public function __construct($number, $expiryYear, $expiryMonth)
    {
        $this->number = $number;
        $this->expiryYear = $expiryYear;
        $this->expiryMonth = $expiryMonth;
    }

    public function isExpired(): bool {
        if ((int) date('y') < $this->expiryYear) {
            return false;
        } else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
            return false;
        }
        return true;
    }

    public function save() {
        // salva la carta nel database
        $this->id = 'id from database';
        return $this;
    }

    public static function get($id) {
        // prende la carta dal database
        // usa i dati per istanziare un oggetto "carta di credito"

        // return new self($number, $expiryYear, $expiryMonth)
    }

    public function pay($amount): bool {
        if ($this->isExpired()) {
            // ritorna errore
            return false;
        }else {
            // fa il pagamento
            return true;
        }
    }
}
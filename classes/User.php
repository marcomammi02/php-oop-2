<?php
class User {
    protected string $name;
    protected string $adress;
    protected CreditCard $creditCard;
    protected int $discount = 0;
    protected array $products;

    public function __construct($name, $adress, $creditCard, $discount)
    {
        $this->name = $name;
        $this->adress = $adress;
        $this->creditCard = $creditCard;
        $this->discount = $discount;
    }

    public function buy() {
        $total_amount = 0;
        foreach ($this->products as $product) {
            $total_amount += $product->getPrice();
        }

        $total_amount = $total_amount - $total_amount * $this->discount / 100;

        if($this->creditCard->pay($total_amount)) {
            echo 'Hai comprato i prodotti';
            return true;
        } else {
            echo 'C\'è stato un errore!';
            return false;
        }
    }
}
<?php
class Product {
    private int $id;
    private string $name;
    private string $category;
    private string $description;
    private int $availability;
    private int $quantity;
    private int $availableStartMonth;
    private int $availableEndMonth;
    private int $price;

    public function __construct($id)
    {
        
    }

    public function isAvailable() {
        if ($this->quantity = 0) {
            return false;
        }
        $currentMont = (int) date('m');
        if ($this->availableStartMonth <= $currentMont && $currentMont <= $this->availableEndMonth) {
            return true;
        }
        return false;
    }

    public function getPrice() {
        return $this ->price;
    }

    public function decrementQuantity() {
        $this->quantity--;
        return $this;
    }

    public static function getAll() {
        // SELECT id FROM products
        // per ciascuna riga risultato creo un nuovo oggetto new Product($id)
    }
}
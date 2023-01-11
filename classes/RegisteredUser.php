<?php
class RegisteredUser extends User{
    private int $id;
    private string $username;
    private string $password;
    protected $discount = 20;

    public function __construct($username, $password)
    {
        // vado nel database a prendere i dati dell'utente
        // setto le variabili d'istanza in base ai valori del database
        // 
        // $row = $conn->query("SELECT * FORM users WHERE `username` = $username AND `password` = $password")
        
        $this->creditCard = CreditCard::get($row['creditcard_id']);

        parent::__construct($row['name'], $row['adress'], $this->creditCard);
    }
}
<?php

class pizza extends CSV_Model {
    
    public function __construct() {
        parent::__construct('../data/pizzas.csv', 'pizzaID');
    }
}
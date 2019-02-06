<?php

class Product {
  protected $prijs;
  protected $naam;

  /**
   * Product constructor.
   * @param $prijs
   * @param $naam
   */
  public function __construct($prijs, $naam)
  {
    $this->prijs = $prijs;
    $this->naam = $naam;
  }

  /**
   * @return mixed
   */
  public function getNaam()
  {
    return $this->naam;
  }

  /**
   * @return mixed
   */
  public function getPrijs()
  {
    return $this->prijs;
  }

  /**
   * @param mixed $prijs
   */
  public function setPrijs($prijs)
  {
    $this->prijs = $prijs;
  }
}

$product = new Product(10, 'Lamp');
echo $product->getNaam() . " " . $product->getPrijs();
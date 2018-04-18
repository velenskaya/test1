<?php
   //class 
class Product
{
  //общие св-ва
  public $name;
  public $price;

  //специфичные св-ва
  public $cpu;
  public $numPages;

  public function __conctruct($name, $price, $cpu, $numPages)
  {
    $this->name = $name;
    $this->price = $price;
    $this->cpu = $cpu;
    $this->numPages = $numPages;
  }


  public function getCpu()
  {
    return $this->cpu;
  }


  public function getNumPages()
  {
    return $this->numPages;
  }


  public function getProduct($type = 'notebook')
  {
    $out = "<hr><b>О товаре:</b><br>
        Наименование: {$this->nume}<br>
        Цена: {$this->price} <br>";
    if ( $type == 'notebook') {
      $out .= "Процессор: {$this->cpu} <br>";
    } else {
         $out .= "Количество страниц: {$this->numPages} <br>";
    }
    return $out;  
  }
    

}

?>
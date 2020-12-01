<?php

echo "<h1>Hola a todos</h1>";

$x = 45;
$coches = array("Ferrari","Lambo","Fiat");
var_dump($x);
var_dump($coches);
echo "si";


class Coche {
    private $color;
    private $precio;

    public function __construct($color,$precio){

        $this->color=$color;
        $this->precio=$precio;
    }


    public function message(){
        return "<p>Mi coche es de color ".$this->color." y vale ".$this->precio." Euros</p>"; 
    }

}
    $y=0;
    do{
        if($y == 2) $myCar = new Coche("negro",12000);
        elseif($y == 5) $myCar = new Coche("Blanco",20000);
        else $myCar = new Coche("Invisible",300);
    echo $myCar->message();
    $y+=1;
    }while($y<=5)








?>
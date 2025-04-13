<?php

class Computer {
    // Atributos
    public $brand;
    public $color;
    public $screenSize;
    public $isOn;

    // Constructor
    public function __construct($brand, $color, $screenSize, $isOn) {
        $this->brand = $brand;
        $this->color = $color;
        $this->screenSize = $screenSize;
        $this->isOn = $isOn;
    }

    // Métodos
    public function turnOn() {
        $this->isOn = true;
        echo "La computadora está encendida.<br>";
    }

    public function turnOff() {
        $this->isOn = false;
        echo "La computadora está apagada.<br>";
    }

    public function showInfo() {
        echo "Marca: $this->brand<br>";
        echo "Color: $this->color<br>";
        echo "Tamaño de pantalla: $this->screenSize pulgadas<br>";
        echo "¿Está encendida?: " . ($this->isOn ? "Sí" : "No") . "<br>";
    }

    public function greet() {
        echo "¡Hola! Soy una computadora sonriente.<br>";
    }
}

// Método main
$computer1 = new Computer("Dell", "Azul", 15.6, false);
$computer1->greet();       // Imprimir 1 método
$computer1->turnOn();
$computer1->showInfo();

?>

<?php

class Gato{
    
    private $nombre;
    private $edad;
    
    
    //Constructor
    
    /*Al constructor se le puede llamar usando el nombre de la clase:
     *  function Gato(){} o usando sintaxis concreta como function __constructor(){}
     * 
     * En php no podemos sobrecargar métodos de la forma habitual de otros lenguajes.
     */
    function Gato($nuevoNombre, $nuevaEdad){
        $this->nombre=$nuevoNombre;
        $this->edad=$nuevaEdad;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getEdad(){
        return $this->edad;
     
    }
    
    public function maulla(){
        echo "miau";
    }
    
    public function come(){
        echo "ñam ñam";
    }
    
    public function ronronea(){
        echo "grrr";
    } 
}


?>

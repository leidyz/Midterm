<?php

class Cancion{

    private int $duracion;
    private string $nombre;
    private Genero $genero;
    private string $autor;


    public function __construct(int $duracion,string $nombre,Genero $genero,string $autor){
        $this->duracion = $duracion;
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->autor = $autor;
    }

    public function getDuracion():int{
        return $this->duracion;
    }

    public function getGenero():Genero{
        return $this->genero;
    }

    public function getNombre():string{
        return $this->nombre;
    }

}

?>
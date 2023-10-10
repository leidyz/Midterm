<?php

class Playlist{
    private array $playlist;


    public function __construct(array $playlist=[]){
        $this->playlist=$playlist;
    }

    public function showByGenre(Genero $genero):void{
        foreach($this->playlist as $cancion){
            if($cancion->getGenero()=== $genero){
                echo $cancion->getNombre()."\n";
            }
        }

    }

    public function longDuration($minutes):void{
        foreach($this->playlist as $cancion){
            if($cancion->getDuracion()>$minutes){
                echo $cancion->getNombre()."\n";
            }
        }
    }
}


?>
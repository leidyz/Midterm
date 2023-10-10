<?php

require_once "Genero.php";
require_once "Cancion.php";
require_once "Playlist.php";


$cancion1 = new Cancion(2,"karly",Genero::Electronik,"taylor");
$cancion2 = new Cancion(5,"say",Genero::Pop,"bruno");
$cancion3 = new Cancion(7,"bye",Genero::Rock,"kelly");
$cancion4 = new Cancion(8,"when",Genero::Pop,"adele");
$cancion5 = new Cancion(3,"why",Genero::Rap,"jason");
$cancion6 = new Cancion(2,"ok",Genero::Electronik,"peter");

$canciones = [$cancion1,$cancion2,$cancion3,$cancion4,$cancion5,$cancion6];

$playlist = new Playlist($canciones);

echo "Las canciones con duracion de mas de 5 minutos son: ";
$playlist->longDuration(5);

echo "Las canciones de Rock son: ";
$playlist->showByGenre(Genero::Rock);

echo "Las canciones de pop son: ";
$playlist->showByGenre(Genero::Pop);

echo "Las canciones de electronica son: ";
$playlist->showByGenre(Genero::Electronik);

echo "Las canciones de Rap son: ";
$playlist->showByGenre(Genero::Rap);


/*
version anterior: 
echo "Las canciones con duracion de mas de 5 minutos son ";
foreach($canciones as $cancion){
    if($cancion->getDuracion()>5){
        echo $cancion->getNombre()."\n";
    }
}
echo "Las canciones de electronica son ";
foreach($canciones as $cancion){
    if($cancion->getGenero()===Genero::Electronik){
        echo $cancion->getNombre()."\n";
    }
}

echo "Las canciones de Rock son ";
foreach($canciones as $cancion){
    if($cancion->getGenero()===Genero::Rock){
        echo $cancion->getNombre()."\n";
    }
}

echo "Las canciones de Rap son ";
foreach($canciones as $cancion){
    if($cancion->getGenero()===Genero::Rap){
        echo $cancion->getNombre()."\n";
    }
}

echo "Las canciones de pop son ";
foreach($canciones as $cancion){
    if($cancion->getGenero()===Genero::Pop){
        echo $cancion->getNombre()."\n";
    }
}
*/

?>
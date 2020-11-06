<?php

//je crée mon objet Maincontroller qui gérera la récup des infos et leur affichage

class MainController extends CoreController

{
    public static function home()
    {
       
        $homePokemon = Pokemon::getPokemon();
     
        return $homePokemon;


    }

       
}
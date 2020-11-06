<?php 


class DetailController extends CoreController

{
    public static function detail($detail_id)
    {
       
        $detailPokemon = Pokemon_type::getDetailPokemon($detail_id);
        return $detailPokemon;

    }

}
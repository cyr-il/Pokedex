<?php

class Pokemon_type extends Pokemon

{

    public static $table = "pokemon_type";

    protected $nom;
    protected $pokemon_numero;
    protected $type_id;
    protected $type;
    protected $pv;
   

    public static function getDetailPokemon(array $detail_id)

    {
        $detail= intval($detail_id['detail_id']);
        //nouvelle connexion à la db
        $pdo = Database::getPDO();
        //je prépare ma requête pour récup mes persos
        // $sql = "SELECT 'character'.'*', 'type'.'name' FROM 'character' inner join 'type' on 'character'.'type_id' = 'type'.'id' order by 'character'.'name' asc; ";

        $sql = "SELECT `type`.`name`, `pokemon_type`.`type_id`,`type`.`color`, `pokemon_type`.`pokemon_numero`,
        `pokemon`.*
        FROM `pokemon_type`
        INNER JOIN `type` ON `type`.`id`=`pokemon_type`.`type_id`
        INNER JOIN `pokemon`ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
        WHERE `pokemon`.`numero`= $detail
        ORDER BY `nom`";
                   
        
        //Je la récupére grâce à query et je la mets dans une variable
        $statement = $pdo->query( $sql );
       
        //je mets cette liste dans un array pour la retravailler plus tard
        $charactersListFromDatabase = $statement->fetchAll(PDO::FETCH_ASSOC );
        //On vérifie qu'on a des résultats
        if( $charactersListFromDatabase === false ) :
            exit( static::$table." not found !" );
        endif;

        //On prépare un tableau d'objets
        $charactersArray = [];

        //On parcours nos résultats pour créer les objets
        //à partir des données récupérées en BDD

        foreach( $charactersListFromDatabase as $characterDataFromDatabase ) :
            $character = new static( $characterDataFromDatabase );
            $charactersArray[] = $character;
        endforeach;
        
        //On renvoi notre tableau d'objets
        return $charactersArray;


    }

    public function getPokemon_numero()         { return $this->pokemon_numero; }
    public function getType_id()                { return $this->type_id; }
    public function getNom()                    { return $this->name; }
    public function getColor()                    { return $this->color; }

}
<?php


class Pokemon extends CoreModel

{
    public static $table = "pokemon";
   
    protected $nom;
    protected $pv;
    protected $attaque;
    protected $defense;
    protected $attaque_spe;
    protected $defense_spe;
    protected $vitesse;
    protected $numero;


    public static function getPokemon()

    {
        //nouvelle connexion à la db
        $pdo = Database::getPDO();
        //je prépare ma requête pour récup mes persos
        // $sql = "SELECT 'character'.'*', 'type'.'name' FROM 'character' inner join 'type' on 'character'.'type_id' = 'type'.'id' order by 'character'.'name' asc; ";

        $sql = "SELECT * FROM `" . static::$table . "`";
        
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

    public function getNom()        { return $this->nom; }
    public function getPv()         { return $this->pv; }
    public function getAttaque()    { return $this->attaque; }
    public function getDefense()    { return $this->defense; }
    public function getAttaque_spe()    { return $this->attaque_spe; }
    public function getDefense_spe()    { return $this->defense_spe; }
    public function getVitesse()    { return $this->vitesse; }
    public function getNumero()    { return $this->numero; }

}
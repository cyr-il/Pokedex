<?php 


class CoreModel 

{
    public static $table;

    protected $id;


    public function __construct( array $_charactersArray )
       
    {
            // On va instancier depuis les données de $_data
            foreach( $_charactersArray as $column => $value ) :
                $this->$column = $value;
            endforeach;

        }

    public function getId()        { return $this->id; }
}

<?php 

//je fais un require de mes 2 fichiers nécessaires

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../app/Controllers/CoreController.php";
require_once __DIR__."/../app/Controllers/MainController.php";
require_once __DIR__."/../app/Controllers/DetailController.php";
require_once __DIR__."/../app/Models/CoreModel.php";
require_once __DIR__."/../app/Models/Pokemon.php";
require_once __DIR__."/../app/Models/Type.php";
require_once __DIR__."/../app/Models/Pokemon_type.php";

//je fais un require de ma db
require_once __DIR__ . "/../app/Utils/Database.php";

//je défini ma constante base URI
define( "BASE_URI", $_SERVER['BASE_URI'] );

//j'instancie ma super classe Altorouter
$router = new AltoRouter();

//je défini mon chemin vers index.php
$router->setBasePath( BASE_URI );


//Maintenant je crée un tableau qui contiendra la méthode et la route à utiliser (tableau qui sera utilisé dans map(target))

$tab_home = 
[
"controller" => "MainController",
"viewName"   => "home"
];

$tab_detail = 
[
"controller" => "DetailController",
"viewName"   => "detail"
];

//j'indique au router comment utiliser ma route

$router->map('GET', '/', $tab_home, "Page d'accueil des Pokemon");
$router->map('GET', '/detail/[i:detail_id]', $tab_detail, "Page des créateurs");

// Une fois ma route "mappée", on demande à Altorouter de vérifier
// la correspondance, et de renvoyer les infos de cette route
$match = $router->match();
// dump($match);
//je préviens le user en cas de mauvaise adresse
if( $match === false ) :
    exit( "404 Page Not Found on this website" );
endif;

// On va devoir récupérer le nom du controller à instancier (même si ici nous n'en avons qu'un)
$controllerToUse = $match['target']['controller'];

//j'instancie donc ce controller
$controller = new $controllerToUse();

//et je récupére maintenant la méthode correspondante de ce controller
$viewName = $match['target']['viewName'];


$controller->vue( $match['params'], $viewName );

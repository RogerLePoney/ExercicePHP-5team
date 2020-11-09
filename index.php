<?php
//Défini le PATH du serveur web dans une constante ROOT;
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

//Chargement du fichier pour la connexion à la base de donnée
require_once(ROOT.'app/BDD.php');
//Chargement du controller global
require_once(ROOT.'app/Controller.php');
//Chargement de ma class UserClass
require_once(ROOT.'model/UserClass.php');

//Sépare dans un tableau les différents éléments situé dans le paramétre 'p'
$params = explode('/', $_GET['p']);

//Si il y a un paramétre
if ($params[0] !== "") {
    //Défini le contrôleur en fonction du premier paramétre
    $controller = ucfirst($params[0]);

    //Défini la méthode à appeler en fonction du deuxième paramétre. Si il n'existe pas, passe 'index' par defaut
    $action = isset($params[1]) ? $params[1] : 'index';

    //Chargement du fichier du contrôleur
    require_once(ROOT.'controller/'.$controller.'.php');

    //Instancie le contrôleur
    $controller = new $controller();

    //On vérifie si la méthode existe
    if (method_exists($controller, $action)) {
        //Si la variable $_POST['prenom'] existe
        if(isset($_POST['prenom'])){
            //Appel la méthode avec des paramétre
            $controller->$action($_POST['prenom'], $_POST['nom'], $_POST['photo'], $_POST['description']);
        } else {
            //Appel la méthode sans paramétre
            $controller->$action();
        }
    } else {
        //Si elle n'existe pas, renvois le code réponse 404
        http_response_code(404);
        echo "La page demandé n'existe pas";
    }
} else {

    //Appel le controleur par défaut
    require_once(ROOT.'controller/Users.php');

    // On instancie le contrôleur
    $controller = new Users();

    // On appelle la méthode index
    $controller->index();
}
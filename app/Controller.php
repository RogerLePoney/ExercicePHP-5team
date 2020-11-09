<?php

abstract class Controller {
    public function loadModel(string $model) {
        //Chargement du fichier du model
        require_once(ROOT.'model/'.$model.'.php');
        //Instancie le model
        $this->$model = new $model();
    }

    public function render(string $fichier, array $data = []) {
        //Décompose le tableau $data pour accéder directement à ses différents éléments
        extract($data);
        
        //Chargement de la vue
        require_once(ROOT.'view/'.strtolower(get_class($this)).'/'.$fichier.'.php');
    }

    //Fonction permettant de récupérer les informations de connexion de la base de données
    public function bdd() {
        try {
            $conn =  new PDO(
                'mysql:host=localhost;dbname=five_team;charset=utf8',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $erreur) {
            return $erreur;
            exit;
        }

        return $conn;
    }
}
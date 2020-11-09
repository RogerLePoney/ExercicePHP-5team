<?php

class Users extends Controller{

    public function index() {
        //Chargement du model
        $this->loadModel("User");
        //Récupération des données
        $users = User::findAll($this->bdd());
        //appel de la vue
        $this->render('index', compact('users'));
    }
    
    public function add(string $prenom, string $nom, string $photo, ?string $description) {
        //Instancie un nouvel objet avec les informations du nouveau contact à créer
        $user = new UserClass(NULL, $prenom, $nom, $photo, $description);
        //Ajoute / Modifi le nouveau contact
        $user->save();
        //Redirection vers la page d'accueil
        header('Location: /'); 
    }

}

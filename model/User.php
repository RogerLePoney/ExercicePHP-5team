<?php

class User
{
    //Fonction permettant de récupérer tout les utilisateur trié dans l'ordre inverse de leurs ajout
    public static function findAll(): array {
        $requete = BDD::getConnexion()->query("SELECT * FROM user ORDER BY id DESC");
        return static::fetchAll($requete);
    }

    //Fonction permettant d'instancier un objet par élément contenu dans la réponse d'une requête
    private static function fetchAll(PDOStatement $requete): array {
        $users = [];

        while($donnees = $requete->fetch()){
            $users[$donnees['id']] = new UserClass(
                $donnees['id'],
                $donnees['prenom'],
                $donnees['nom'],
                $donnees['photo'],
                $donnees['description']
            );
        }

        $requete->closeCursor();

        return $users;
    }
}

?>
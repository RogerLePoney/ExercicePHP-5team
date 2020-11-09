<?php


class BDD
{
    private static PDO $connexion;

    //Fonction permettant la connexion à la base de données
    public static function getConnexion(): PDO
    {
        if(!isset(static::$connexion)) {
            static::$connexion = new PDO(
                'mysql:host=localhost;dbname=five_team;charset=utf8', 'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return static::$connexion;
    }


}
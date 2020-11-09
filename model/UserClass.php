<?php

class UserClass {
    private ?int $id;
    private string $prenom = 'inconnu';
    private string $nom = 'inconnu';
    private string $photo = 'inconnu';
    private ?string $description;

    public function __construct(?int $id, string $prenom, string $nom, string $photo, ?string $description) {
        $this->id = $id;
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setPhoto($photo);
        $this->setDescription($description);
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getPhoto(): string {
        return $this->photo;
    }

    public function setPhoto(string $photo): void {
        $this->photo = $photo;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function save(): void
    {
        if(is_null($this->getId()))
            //Ajoute du contact à la base de données si il n'existe pas
            $this->insert();
        else
            //Modification du contact dans la base de données si il existe
            $this->update();
    }

    //Fonction d'ajout de contact
    private function insert(): void
    {
        //Prépare la requête
        $requete = BDD::getConnexion()->prepare(<<<TAG
            INSERT INTO user (prenom, nom, photo, description) 
            VALUES (:prenom, :nom, :photo, :description)
            TAG
        );

        //Exécute la requête avec les différents paramétres
        $requete->execute([
            ':prenom' => $this->getPrenom(),
            ':nom' => $this->getNom(),
            ':photo' => $this->getPhoto(),
            ':description' => $this->getDescription()
        ]);
        //Défini l'id de manière automatique
        $this->id = BDD::getConnexion()->lastInsertId();
    }

    //Fonction de modification de contact
    private function update(): void
    {
        $requete = BDD::getConnexion()->prepare(<<<TAG
            UPDATE user SET 
                            prenom = :prenom,
                            nom = :nom,
                            photo = :photo,
                            description = :description 
            
            WHERE id = :id
            TAG
        );
        $requete->execute([
            ':id' => $this->getId(),
            ':prenom' => $this->getPrenom(),
            ':nom' => $this->getNom(),
            ':photo' => $this->getPhoto(),
            ':description' => $this->getDescription()
        ]);
    }
}
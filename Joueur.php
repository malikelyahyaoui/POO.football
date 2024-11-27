<?php

class Joueur {
    private string $prenom;
    private string $nom;
    private string $dateNaissance;
    private string $nationalite;
    private array $carriere;

    public function __construct(string $prenom, string $nom, string $dateNaissance, string $nationalite) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->nationalite = $nationalite;
        $this->carriere = [];
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getDateNaissance(): string {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getNationalite(): string {
        return $this->nationalite;
    }

    public function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
    }

    public function getCarriere():array {
        return $this->carriere;
    }

    public function setCarriere($carriere) {
        $this->carriere = $carriere;
    }

    public function getAge() {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        $age = $aujourdhui->diff($dateNaissance);
        return $age->y;
    }

    public function ajouterCarriere(Carriere $carriere) {
        $this->carriere[] = $carriere;
    }
}
?>

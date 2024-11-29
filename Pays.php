<?php


class Pays {
    private string $nom;
    private array $equipes;

    public function __construct(string $nom) {
        $this->nom = $nom;
        $this->equipes = [];
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEquipes():array {
        return $this->equipes;
    }

    public function setEquipes($equipes) {
        $this->equipes = $equipes;
    }

    public function ajouterEquipe($equipe) {
        $this->equipes[] = $equipe;
    }
}
?>
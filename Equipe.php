<?php

class Equipe {
    private string $nom;
    private Pays $pays;
    private array $joueurs;

    public function __construct(string $nom, Pays $pays) {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->joueurs = [];
        $this->pays->ajouterEquipe($this); 
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getJoueurs() {
        return $this->joueurs;
    }

    public function setJoueurs($joueurs) {
        $this->joueurs = $joueurs;
    }

    

    public function getPays() {
        return $this->pays;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }


    public function ajouterJoueur($joueur, $annee) {
        $this->joueurs[] = ['joueur' => $joueur, 'annee' => $annee];
    }
}
?>

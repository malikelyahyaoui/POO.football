<?php
class Carriere {
    private Joueur $joueur;
    private Equipe $equipe;
    private int $annee;

    public function __construct(Joueur $joueur, Equipe $equipe, int $annee) {
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->annee = $annee;
    }

    public function getJoueur(): Joueur {
        return $this->joueur;
    }

    public function setJoueur($joueur): self {
        $this->joueur = $joueur;
        return $this;
    }

    public function getEquipe(): Equipe {
        return $this->equipe;
    }

    public function setEquipe($equipe): self {
        $this->equipe = $equipe;
        return $this;
    }

    public function getAnnee(): int {
        return $this->annee;
    }

    public function setAnnee($annee): self {
        $this->annee = $annee;
        return $this;
    }

    public function afficherCarriere(): string {
        return $this->equipe->getNom() . ' (' . $this->annee . ')';
    }
}

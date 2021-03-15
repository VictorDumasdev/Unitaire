<?php

namespace App\Search;

use App\Entity\Adherent;

class AdherentSearch
{
    public function identifiantNormalise(Adherent $adherent) {
        $nom = $adherent->getNom();
        $nom = preg_replace('^[a-zA-Z]+$', '', $nom);
        $prenom = $adherent->getPrenom();
        $prenom = preg_replace('^[a-zA-Z]+$', '', $prenom);
        $date = $adherent->getDateNaissance();
        $ident = $date->format("dmY") . strtoupper($nom) . '_' . strtoupper($prenom);
        $ident = str_replace('-','',$ident);

        return $ident;
    }
}

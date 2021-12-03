<?php

namespace App\Data;

use App\Entity\Category;
use App\Entity\Equipement;

class SearchData
{

    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Equipement[]
     */
    public $equipements = [];

    /**
     * @var null|string
     */
    public $recherche;

    // /**
    //  * @var null|string
    //  */
    // public $nomUtilisateur;

    // /**
    //  * @var boolean
    //  */
    // public $enService = false;

}
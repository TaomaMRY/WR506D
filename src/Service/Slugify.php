<?php

namespace App\Service;

use Cocur\Slugify\Slugify as CocurSlugify;

class Slugify {
    //---functiond de "flugify"
    public function slugify($stringToSlugify){

        //--ICI que l'on ajoute la logique de slugification de
        //--la variable $stringToSlugify
        $slugify = new CocurSlugify();
        return $slugify->slugify($stringToSlugify);


    }
}


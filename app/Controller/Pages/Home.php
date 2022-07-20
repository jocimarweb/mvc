<?php

namespace App\Controller\Pages;

use App\Model\Entity\Organization;
use App\Utils\View;

class Home extends Page
{
    /**
     * Método responsável por retorna o conteúdo (view) da nossa Home.
     *
     * @return string
     */
    public static function getHome()
    {
        // Organização
        $objOrganization = new Organization;

        // Retorna a View da Home
        $content = View::render('pages/home', [
            'name'         => $objOrganization->name,
            'description'  => $objOrganization->description,
            'site'         => $objOrganization->site,
        ]);

        // Retorna a View da Página
        return parent::getPage('WDEV - Canal - Home', $content);
    }
}

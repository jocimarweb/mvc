<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
    /**
     * Método responsável por renderizar o topo da Página.
     *
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar o rodapé da Página.
     *
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retorna o conteúdo (view) da nossa Página Genérica.
     *
     * @return string
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title'    => $title,
            'header'   => self::getHeader(),
            'content'  => $content,
            'footer'   => self::getFooter()
            ]);
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;

class ArticleController
{
    /**
     * @Get(path="/articles/{id}", name="app_article_show", requirements={"id"="\d+"})
     * @View()
     *
     * @param Article $article
     * @return Article
     */
    public function showAction(Article $article)
    {
        // Objet qui doit être sérialisé:
        return $article;
    }
}



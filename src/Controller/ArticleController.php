<?php
/**
 * Created by PhpStorm.
 * User: sudheendra
 * Date: 3/17/18
 * Time: 9:30 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('article/index.html.twig',['title'=>'Hello World']);

    }

    /**
     * @Route("/news/{method}")
     */
    public function show($method)
    {

        $comments = ['Test1','Test2','Test3'];

        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ',$method)),
            'comments' => $comments,
        ]);
    }
}
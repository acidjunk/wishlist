<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog controller.
 */
class BlogController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getEntityManager();

        $blogs = $em->createQueryBuilder()
            ->select('b')
            ->from('BloggerBlogBundle:Blog',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('BloggerBlogBundle:Blog:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
        ));
    }
}
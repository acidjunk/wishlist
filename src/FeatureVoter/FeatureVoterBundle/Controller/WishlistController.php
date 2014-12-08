<?php

namespace FeatureVoter\FeatureVoterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// Import contact namespaces
//use Blogger\BlogBundle\Entity\Enquiry;
//use Blogger\BlogBundle\Form\EnquiryType;

class WishlistController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $wishes = $em->createQueryBuilder()
            ->select('b')
            ->from('FeatureVoterBundle:Wishlist',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('FeatureVoterBundle:Wishlist:index.html.twig', array(
            'wishes' => $wishes
        ));


        return $this->render('FeatureVoterBundle:Wishlist:index.html.twig');
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $wishlist = $em->getRepository('FeatureVoterBundle:Wishlist')->find($id);

        if (!$wishlist) {
            throw $this->createNotFoundException('Unable to find wishlist item.');
        }

        return $this->render('FeatureVoterBundle:Wishlist:show.html.twig', array(
            'wishlist' => $wishlist,
        ));
    }


    public function voteAction()
    {

    }

}
?>
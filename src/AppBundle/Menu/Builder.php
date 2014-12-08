<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
    $menu = $factory->createItem('root');

    $menu->addChild('Home', array('route' => 'homepage'));
    //$menu->addChild('About Me', array(
    //'route' => 'page_show',
    //'routeParameters' => array('id' => 42)
    //));
    // ... add more children

    return $menu;
    }

    public function leftNavbarMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Features', array('route' => 'homepage'));
        $menu->addChild('About', array('route' => 'homepage'));
        //$menu->addChild('About Me', array(
        //'route' => 'page_show',
        //'routeParameters' => array('id' => 42)
        //));
        // ... add more children

        return $menu;
    }


    public function rightNavbarMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Login', array('route' => 'homepage'));
        //$menu->addChild('About Me', array(
        //'route' => 'page_show',
        //'routeParameters' => array('id' => 42)
        //));
        // ... add more children

        return $menu;
    }

}
?>
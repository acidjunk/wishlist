<?php
namespace FeatureVoter\FeatureVoterBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FeatureVoter\FeatureVoterBundle\Entity\Wishlist;

class WishlistFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wish1 = new Wishlist();
        $wish1->setTitle('Invent sliced bread');
        $wish1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish1->setVotes(30);
        $wish1->setAuthor('Rene');
        $wish1->setTags('symfony2, php, paradise, symblog');
        $wish1->setCreated(new \DateTime());
        $wish1->setUpdated($wish1->getCreated());
        $manager->persist($wish1);

        $wish2 = new Wishlist();
        $wish2->setTitle('Make it build a new version automatically');
        $wish2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish2->setVotes(500);
        $wish2->setAuthor('Rene');
        $wish2->setTags('symfony2, php, paradise, symblog');
        $wish2->setCreated(new \DateTime());
        $wish2->setUpdated($wish2->getCreated());
        $manager->persist($wish2);

        $wish3 = new Wishlist();
        $wish3->setTitle('Let it generate a selenium based testsuite');
        $wish3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish3->setVotes(10);
        $wish3->setAuthor('Rene');
        $wish3->setTags('symfony2, php, paradise, symblog');
        $wish3->setCreated(new \DateTime());
        $wish3->setUpdated($wish3->getCreated());
        $manager->persist($wish3);

        $wish4 = new Wishlist();
        $wish4->setTitle('Do the dishes');
        $wish4->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish4->setVotes(300);
        $wish4->setAuthor('Rene');
        $wish4->setTags('symfony2, php, paradise, symblog');
        $wish4->setCreated(new \DateTime());
        $wish4->setUpdated($wish4->getCreated());
        $manager->persist($wish4);

        $wish5 = new Wishlist();
        $wish5->setTitle('Invent clean energy');
        $wish5->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish5->setVotes(9);
        $wish5->setAuthor('Rene');
        $wish5->setTags('symfony2, php, paradise, symblog');
        $wish5->setCreated(new \DateTime());
        $wish5->setUpdated($wish5->getCreated());
        $manager->persist($wish5);

        $wish6 = new Wishlist();
        $wish6->setTitle('Use a background queueing system');
        $wish6->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $wish6->setVotes(5);
        $wish6->setAuthor('Rene');
        $wish6->setTags('symfony2, php, paradise, symblog');
        $wish6->setCreated(new \DateTime());
        $wish6->setUpdated($wish6->getCreated());
        $manager->persist($wish6);

        $manager->flush();
    }

}
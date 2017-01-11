<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadCategoryData
 *
 * @author pp
 */
namespace MyBookBundle\DataFixtures\ORM;

use \Doctrine\Common\DataFixtures\AbstractFixture;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use \Doctrine\Common\Persistence\ObjectManager;
use My\TaskBundle\Entity\User;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface{
    
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEmail('admin@admin.pl');
        $userAdmin->setEnabled(true);

        $manager->persist($userAdmin);
        
        $manager->flush();
    }

}

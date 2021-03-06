<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author pp
 */

namespace My\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="my_user")
 */
class User extends BaseUser {
    
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     *
     * @var type 
     * @ORM\OneToMany(targetEntity="Log", mappedBy="user")
     */
    private $logs;
    
    public function __construct() {
        parent::__construct();
    }


    /**
     * Add logs
     *
     * @param \My\TaskBundle\Entity\Log $logs
     * @return User
     */
    public function addLog(\My\TaskBundle\Entity\Log $logs)
    {
        $this->logs[] = $logs;

        return $this;
    }

    /**
     * Remove logs
     *
     * @param \My\TaskBundle\Entity\Log $logs
     */
    public function removeLog(\My\TaskBundle\Entity\Log $logs)
    {
        $this->logs->removeElement($logs);
    }

    /**
     * Get logs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLogs()
    {
        return $this->logs;
    }
}

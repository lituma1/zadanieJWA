<?php

namespace My\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log")
 * @ORM\Entity(repositoryClass="My\TaskBundle\Repository\LogRepository")
 */
class Log
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loginTime", type="datetime")
     */
    private $loginTime;
    
    /**
     *
     * @var type 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="logs")
     */
    private $user;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loginTime
     *
     * @param \DateTime $loginTime
     * @return Log
     */
    public function setLoginTime($loginTime)
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * Get loginTime
     *
     * @return \DateTime 
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Set user
     *
     * @param \My\TaskBundle\Entity\User $user
     * @return Log
     */
    public function setUser(\My\TaskBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \My\TaskBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}

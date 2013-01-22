<?php

namespace Morgz\Bundle\FiltersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareType
 *
 * @ORM\Table(name="sharetype")
 * @ORM\Entity
 */
class ShareType
{
    /**
     * @ORM\OneToMany(targetEntity="Share", mappedBy="shareType")
     */
    private $shares;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return ShareType
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->shares = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add shares
     *
     * @param \Morgz\Bundle\FiltersBundle\Entity\Share $shares
     * @return ShareType
     */
    public function addShare(\Morgz\Bundle\FiltersBundle\Entity\Share $shares)
    {
        $this->shares[] = $shares;
    
        return $this;
    }

    /**
     * Remove shares
     *
     * @param \Morgz\Bundle\FiltersBundle\Entity\Share $shares
     */
    public function removeShare(\Morgz\Bundle\FiltersBundle\Entity\Share $shares)
    {
        $this->shares->removeElement($shares);
    }

    /**
     * Get shares
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShares()
    {
        return $this->shares;
    }
}
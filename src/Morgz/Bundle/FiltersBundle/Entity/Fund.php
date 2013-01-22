<?php

namespace Morgz\Bundle\FiltersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Criteria;

/**
 * Fund
 *
 * @ORM\Table(name="fund")
 * @ORM\Entity
 */
class Fund
{
    /**
     * @ORM\OneToMany(targetEntity="Share", mappedBy="fund")
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
     * @return Fund
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
     * @return Fund
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

    /**
     * Get shares where share type matches criteria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSharesByShareType(array $ids)
    {
        $criteria = Criteria::create()
            ->where(Criteria::expr()->in("shareType", $ids));

        return $this->shares->matching($criteria);
    }
}
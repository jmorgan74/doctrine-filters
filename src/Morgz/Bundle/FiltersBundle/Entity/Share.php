<?php

namespace Morgz\Bundle\FiltersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share
 *
 * @ORM\Table(name="share")
 * @ORM\Entity
 */
class Share
{
    /**
     * @ORM\ManyToOne(targetEntity="ShareType", inversedBy="shares")
     * @ORM\JoinColumn(name="sharetype_id", referencedColumnName="id")
     */
    private $shareType;

    /**
     * @ORM\ManyToOne(targetEntity="Fund", inversedBy="shares")
     * @ORM\JoinColumn(name="fund_id", referencedColumnName="id")
     */
    private $fund;

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
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;


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
     * @return Share
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
     * Set price
     *
     * @param float $price
     * @return Share
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set shareType
     *
     * @param \Morgz\Bundle\FiltersBundle\Entity\ShareType $shareType
     * @return Share
     */
    public function setShareType(\Morgz\Bundle\FiltersBundle\Entity\ShareType $shareType = null)
    {
        $this->shareType = $shareType;

        return $this;
    }

    /**
     * Get shareType
     *
     * @return \Morgz\Bundle\FiltersBundle\Entity\ShareType 
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * Set fund
     *
     * @param \Morgz\Bundle\FiltersBundle\Entity\Fund $fund
     * @return Share
     */
    public function setFund(\Morgz\Bundle\FiltersBundle\Entity\Fund $fund = null)
    {
        $this->fund = $fund;
    
        return $this;
    }

    /**
     * Get fund
     *
     * @return \Morgz\Bundle\FiltersBundle\Entity\Fund 
     */
    public function getFund()
    {
        return $this->fund;
    }
}
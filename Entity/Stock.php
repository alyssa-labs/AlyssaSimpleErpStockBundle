<?php

namespace Alyssa\SimpleErp\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alyssa\SimpleErp\StockBundle\Entity\Stock
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var decimal $amount
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    private $amount;

    /**
     * @var object $type_amount
     *
     * @ORM\Column(name="type_amount", type="object")
     */
    private $type_amount;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var integer $product
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="acumulatedStock")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     *
     */
    private $product;

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
     * Set amount
     *
     * @param decimal $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set type_amount
     *
     * @param object $typeAmount
     */
    public function setTypeAmount($typeAmount)
    {
        $this->type_amount = $typeAmount;
    }

    /**
     * Get type_amount
     *
     * @return object
     */
    public function getTypeAmount()
    {
        return $this->type_amount;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set product
     *
     * @param Alyssa\SimpleErp\StockBundle\Entity\Product $product
     */
    public function setProduct(\Alyssa\SimpleErp\StockBundle\Entity\Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return Alyssa\SimpleErp\StockBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
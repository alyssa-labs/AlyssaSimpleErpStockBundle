<?php

namespace Alyssa\SimpleErp\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Alyssa\SimpleErp\StockBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer $type
     *
     * @ORM\ManyToOne(targetEntity="ProductType")
     * @ORM\JoinColumn(name="product_type_id", referencedColumnName="id")
     */
    private $type;

    /**
     * @var integer $acumulatedStock
     *
     * @ORM\OneToMany(targetEntity="Stock", mappedBy="product")
     */
    private $acumulatedStock;

    /**
     * @var integer $product
     *
     * @ORM\OneToOne(targetEntity="Stock")
     * @ORM\JoinColumn(name="current_stock_id", referencedColumnName="id")
     *
     */
     private $currentStock;


    public function __construct()
    {
        $this->acumulatedStock = new ArrayCollection();
    }


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add acumulatedStock
     *
     * @param Alyssa\SimpleErp\StockBundle\Entity\Stock $acumulatedStock
     */
    public function addStock(\Alyssa\SimpleErp\StockBundle\Entity\Stock $acumulatedStock)
    {
        $this->acumulatedStock[] = $acumulatedStock;
    }

    /**
     * Get acumulatedStock
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAcumulatedStock()
    {
        return $this->acumulatedStock;
    }

    /**
     * Set currentStock
     *
     * @param Alyssa\SimpleErp\StockBundle\Entity\Stock $currentStock
     */
    public function setCurrentStock(\Alyssa\SimpleErp\StockBundle\Entity\Stock $currentStock)
    {
        $this->currentStock = $currentStock;
    }

    /**
     * Get currentStock
     *
     * @return Alyssa\SimpleErp\StockBundle\Entity\Stock
     */
    public function getCurrentStock()
    {
        return $this->currentStock;
    }

    /**
     * Set type
     *
     * @param Alyssa\SimpleErp\StockBundle\Entity\ProductType $type
     */
    public function setType(\Alyssa\SimpleErp\StockBundle\Entity\ProductType $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return Alyssa\SimpleErp\StockBundle\Entity\ProductType
     */
    public function getType()
    {
        return $this->type;
    }
}

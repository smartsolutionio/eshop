<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description",type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="availibility",type="string", length=255)
     */
    private $availibility;

    /**
     * @var string
     *
     * @ORM\Column(name="validity_delivery",type="date")
     */
    private $validity_delivery;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="product")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="Farmer", mappedBy="products")
     */
    private $farmers;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return  string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  string  $price
     *
     * @return  self
     */
    public function setPrice(string $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of availibility
     *
     * @return  string
     */
    public function getAvailibility()
    {
        return $this->availibility;
    }

    /**
     * Set the value of availibility
     *
     * @param  string  $availibility
     *
     * @return  self
     */
    public function setAvailibility(string $availibility)
    {
        $this->availibility = $availibility;

        return $this;
    }

    /**
     * Get the value of validityDelivery
     *
     * @return  string
     */
    public function getValidityDelivery()
    {
        return $this->validity_delivery;
    }

    /**
     * Set the value of validityDelivery
     *
     * @param  string  $validityDelivery
     *
     * @return  self
     */
    public function setValidityDelivery(string $validity_delivery)
    {
        $this->validity_delivery = $validity_delivery;

        return $this;
    }

    /**
     * Get the value of categories
     */
    public function getCategory()
    {
        return $this->categories;
    }

    /**
     * Set the value of categories
     *
     * @return  self
     */
    public function setCategory($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get the value of farmers
     */
    public function getFarmers()
    {
        return $this->farmers;
    }

    /**
     * Set the value of farmers
     *
     * @return  self
     */
    public function setFarmers($farmers)
    {
        $this->farmers = $farmers;

        return $this;
    }
}

<?php

namespace app\model;


class Product
{
    protected $id;
    protected $productName;
    protected $productLine;
    protected $price;
    protected $amount;
    protected $creat_at;
    protected $description;

    /**
     * Product constructor.
     * @param $id
     * @param $productName
     * @param $productLine
     * @param $price
     * @param $amount
     * @param $creat_at
     * @param $description
     */
    public function __construct($id, $productName, $productLine, $price, $amount, $creat_at, $description)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productLine = $productLine;
        $this->price = $price;
        $this->amount = $amount;
        $this->creat_at = $creat_at;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @param mixed $productLine
     */
    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getCreatAt()
    {
        return $this->creat_at;
    }

    /**
     * @param mixed $creat_at
     */
    public function setCreatAt($creat_at)
    {
        $this->creat_at = $creat_at;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
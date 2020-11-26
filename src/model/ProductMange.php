<?php

namespace app\model;
class ProductMange
{

    protected $dataManage;

    public function __construct()
    {
        $this->dataManage = new DBConnect();
    }

    function getAllProduct(){
        $sql = "SELECT * FROM `product`";
        $statement = $this->dataManage->connectDB()->query($sql);
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $product = new Product($item['productName'],$item['productLine'],$item['price'],$item['amount'],$item['creat_at'],$item['description']);
            $product->setId($item['id']);
            array_push($arr,$product);
        }
        return $arr;
    }

    function addProduct($product){
        $sql = "INSERT INTO `product`(`productName`, `productLine`, `price`, `amount`, `creat_at`, `description`) VALUES (:productName,:productLine,:price,:amount,:creat_at,:description)";
        $statement = $this->dataManage->connectDB()->prepare($sql);
        $statement->bindParam(":productName",$product->getProductName());
        $statement->bindParam(":productLine",$product->getProductLine());
        $statement->bindParam(":price",$product->getPrice());
        $statement->bindParam(":amount",$product->getAmount());
        $statement->bindParam(":creat_at",$product->getCreat_at());
        $statement->bindParam(":description",$product->getDescription());
        $statement->execute();
    }

    function deleteProduct($id){
        $sql = "DELETE FROM `product` WHERE `id`=:id";
        $statement = $this->dataManage->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
    }

    function updateProduct($product){
        $sql = "UPDATE `product` SET `productName`=:productName,`productLine`=:productLine,`price`=:price,`amount`=:amount,`creat_at`=:craet_at,`description`=:description WHERE `id`=:id";
        $statement = $this->dataManage->connectDB()->prepare($sql);
        $statement->bindParam(':id',$product->getId());
        $statement->bindParam(":productName",$product->getProductName());
        $statement->bindParam(":productLine",$product->getProductLine());
        $statement->bindParam(":price",$product->getPrice());
        $statement->bindParam(":amount",$product->getAmount());
        $statement->bindParam(":creat_at",$product->getCreat_at());
        $statement->bindParam(":description",$product->getDescription());
        $statement->execute();
    }

    function getProductById($id){
        $sql = "SELECT * FROM `product` WHERE `id`=:id";
        $statement = $this->dataManage->connectDB()->prepare($sql);
        $statement->bindParam(':id',$id);
        $statement->execute();
        return $statement->fetch();
    }

    function searchProduct($keyword){
        $sql = "SELECT * FROM `product` WHERE `productName` LIKE :keyword";
        $statement = $this->dataManage->connectDB()->prepare($sql);
        $statement->bindValue(':keyword','%'.$keyword.'%');
        $statement->execute();
        $data = $statement->fetchAll();
        $arr = [];
        foreach ($data as $item){
            $product = new Product($item['productName'],$item['productLine'],$item['price'],$item['amount'],$item['creat_at'],$item['description']);
            $product->setId($item['id']);
            array_push($arr,$product);
        }
        return $arr;
    }


}

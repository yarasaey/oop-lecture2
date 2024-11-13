<?php
class  Product{
    
public $name;
public $price;
public $description;
public $image="1jpj";



    public function uploadimage(){
       return $this->image;

    }

    public function calcprice(){
        return $this->price ;


    }
}
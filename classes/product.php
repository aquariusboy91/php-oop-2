<?php 
    class Product {
        protected $id; 
        protected $name; 
        protected $type; 
        protected $price; 
        protected $brand; 
        protected $description; 

        public function __construct($name, $type, $price) {
            $this->name = $name;
            $this->type = $type;
            $this->price = $price;
        }

        public function getName()
  {
        return $this->name;
  }


        public function setName($name)
    {
        $this->name = $name;

         return $this;
    }

    public function getType()
    {
          return $this->$type;
    }

    public function setType($type)
    {
        $this->type = $type;

         return $this;
    }

    public function getPrice()
    {
          return $this->$price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

         return $this;
    }

    public function getBrand()
    {
          return $this->$brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

         return $this;
    }

    public function getDescription()
    {
          return $this->$description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

         return $this;
    }
    }
?>
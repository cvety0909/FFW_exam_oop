<? php
	abstract class Vehicle
		public $brand;
     public function __construct($brand){
         $this->brand=$brand;
     }

     private $model;
          public function __construct($model){
         $this->model=$model;
     }

     private $price;
          public function __construct($price){
         $this->price=$price;

         public function getBrand ()
         public function getModel ()
         public function getPrice ()

         public abstract function startEngine ()
         public abstract function stopEngine ()
         public abstract function PrintData ()


         Class Car extends abstract class Vehicle {
         	public $horsePower;
         	public $weight;
         	public $color;
         }

         Class Bus extends Vehicle{

         }
         ?>
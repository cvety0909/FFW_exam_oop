<? php
interface Mammal {
    public function talk();
    public function walk ();
 }
 abstract class Person implements Mammal{
     private $name;
     public function __construct($name){
         $this->name=$name;
     }
     public abstract function printInfo();

     private $age;
          public function __construct($age){
         $this->age=$age;
     }
          public abstract function printInfo();

     private $gender;
          public function __construct($gender){
         $this->gender=$gender;
     }

  abstract class Animal implements Mammal{
     private $name;
     public function __construct($name){
         $this->name=$name;
     }
     public abstract function printInfo();

     private $age;
          public function __construct($age){
         $this->age=$age;
     }
          public abstract function printInfo();

     private $gender;
          public function __construct($gender){
         $this->gender=$gender;
     }
     		class Dolphin extends Animal {

     		}
     		class Students extends Person {

     		}

     	?>
 }



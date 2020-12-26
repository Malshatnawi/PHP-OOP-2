<?php







abstract class car{

    public $name;
    public $model;
    public $price;
   

     abstract public function carName($x);
     abstract protected function carModel();
     abstract public function carPrice();

}





class Mercedes extends car {


    public function carName($x){
        $this->name= $x;
        echo "This Car is Mercedes" .$x;
    }
    public function carModel(){
        echo "This Car is Mercedes ";
    }
    public function carPrice(){
        echo "This Car is Mercedes ";
    }
}


$E200= new Mercedes();
$E200->carName('E200');
echo "<br>";
$E200->carModel();
echo "<br>";
$E200->carPrice('30000');
echo "<br>";


class Toyota extends car {

    public $name;
    public $model;

    public function carName($x){
        $this->name= $x;
        echo "This Car is".$x;
    }
    public function carModel(){
        echo "This Car is". $name;
    }
    public function carPrice(){
        // echo "This Car is". $name;
    }
}


$Priyus = New Toyota();

$Priyus->carName("Toyota Priyus");






interface Animal {
    public function makeSound();
  }
  
  // Class definitions
  class Cat implements Animal {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog implements Animal {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
  }



interface a{
   public function printData();
}
interface b{
   public function getData();
}
interface c extends a, b{
   public function addData();
}
class d implements c{
   public function printData(){
      echo "I am printing";
   }
   public function getData(){
      echo "I am reading data";
   }
   public function addData(){
      echo "I am adding";
   }
}
// $inter = new c();
$myobj = new  d();
echo  "<br>";
$myobj->printData();
echo  "<br>";
$myobj->addData();



?>
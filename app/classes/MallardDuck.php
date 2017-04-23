<?php
namespace app\classes;
use app\classes\Duck;

class MallardDuck extends Duck
{

    function __construct(){
        echo 'function __construct();';
        $this->quackBehavior = Quack::quack();
        $this->flyBehavior = new FlyWithWings();
    }

    function display()
    {
        // TODO: Implement display() method.
        echo "я отрисовалась! (MallardDuck/забавная кряква)<br>";
    }

}

<?php
namespace app\classes;
use app\classes\QuackBehavior;
use app\classes\Squeak;

abstract class Duck{

    var $quackBehavior;
    var $flyBehavior;
    function performQuack(){}
    function swim(){}
    abstract function display();
    function performFly(){}
    function setFlyBehavior(){}

//    Другие методы

}


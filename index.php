<?php
require __DIR__ . '/vendor/autoload.php';
use app\classes\Duck;
use app\classes\Squeak;
use app\classes\Quack;
use app\classes\DecoyDuck;
use app\classes\FlyBehavior;
use app\classes\FlyWithWings;
use app\classes\FlyNoWay;
use app\classes\MallardDuck;
use app\classes\MuteQuack;
use app\classes\QuackBehavior;
use app\classes\RubberDuck;
use app\classes\RedheadDuck;

$mallardDuck = new MallardDuck();
$mallardDuck->quackBehavior();
?>
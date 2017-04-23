<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}

echo '1)';
print Foo::$my_static . "<br>";

echo '2)';
$foo = new Foo();
print $foo->staticValue() . "<br><br>";


echo '3)';
print $foo->my_static . "<br><br>";      // Не определено свойство my_static


echo '4)';
print $foo::$my_static . "<br>"; // Начиная с PHP 5.3.0

echo '5)';
$classname = 'Foo';
print $classname::$my_static . "<br>"; // Начиная с PHP 5.3.0

echo '6)';
print Bar::$my_static . "<br>";

echo '7)';
$bar = new Bar();
print $bar->fooStatic() . "<br>";
?>
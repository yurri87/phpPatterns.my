<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 20.04.2017
 * Time: 22:29
 */

class Singleton
{
    public $name = 'father';
    /**
     * @var Singleton ссылается на экземпляр "Singleton" этого класса
     */
    protected static $instance;

    /**
     * Возвращает экземпляр "Singleton" этого класса
     *
     * @return Singleton экземпляра "Singleton".
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Защищенный конструктор для предотвращения создания нового экземпляра
     * "Singleton" с помощью оператора `new` из-за пределов этого класса.
     */
    protected function __construct()
    {
    }

    /**
     * private метод клонирования для предотвращения клонирования экземпляра "Singleton"
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Частный метод unserialize для предотвращения unserialize экземпляра Singleton.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}

class SingletonChild extends Singleton
{
    public $name = 'child';
}

$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());             // bool(true)

$anotherObj = SingletonChild::getInstance();
var_dump($anotherObj === Singleton::getInstance());      // bool(true)

var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)

echo '<br><br>';

$object = SingletonChild::getInstance();
var_dump($object);

$object2 = Singleton::getInstance();
var_dump($object2);
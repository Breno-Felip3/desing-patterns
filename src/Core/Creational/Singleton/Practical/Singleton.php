<?php
namespace Core\Creational\Singleton\Practical;
use Exception;

class Singleton
{
    protected static array $instances = [];

    protected function __construct(){}

    protected function __clone(): void {}

    public function __sleep(): array
    {
        throw new Exception('Canot serialize a singleton');

        return [];
    }

    public function __wakeup()
    {
        throw new Exception('Canot unserialize a singleton');
    }

    public static function getInstance()
    {
        $cls = static::class;
        if(! isset(self::$instances[$cls]))
        {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }
}
<?php
namespace Core\Creational\Singleton\Practical;

class DbConnection extends Singleton
{
    protected function __construct()
    {
        var_dump(date("Y-m-d H:i:s"));
    }
}
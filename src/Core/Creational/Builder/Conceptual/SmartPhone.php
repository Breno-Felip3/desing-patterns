<?php
namespace Core\Creational\Builder\Conceptual;

abstract class SmartPhone
{
    public function __construct(
        //Todos os atributos do smartPhone são opicionais
        protected ? string $cpu = null,
        protected ? string  $gpu = null,
        protected ? string $model = null,
        protected ? int $ram = null,
        protected ? array $sensors = null
    )
    {}

    // Método mágico para setar valores
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    // Método mágico para pegar valores
    public function __get($name)
    {
        return $this->$name;
    }

}
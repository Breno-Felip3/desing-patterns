<?php
namespace Core\Creational\Builder\Practical;

final class Phone
{
    public function __construct(
        protected string $ddd,
        protected string $number,
        protected ?bool $active = true,
    ) {}
}
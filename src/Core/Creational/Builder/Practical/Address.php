<?php
namespace Core\Creational\Builder\Practical;

final class Address
{
    public function __construct(
        protected string $street,
        protected string $city,
        protected string $state,
        protected string $postalCode,
        protected string $country,
    ) {}
}
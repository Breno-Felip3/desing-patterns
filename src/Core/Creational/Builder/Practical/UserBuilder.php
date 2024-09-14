<?php
namespace Core\Creational\Builder\Practical;

use Core\Creational\Builder\Practical\Enums\Role;
use Core\Creational\Builder\Practical\Address;
use Core\Creational\Builder\Practical\Phone;
use Core\Creational\Builder\Practical\User;

class UserBuilder implements UserBuilderInterface
{
    private ?User $user = null;
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->user = null;
    }
    
    public function addBasicInfo(
        string $firstName,
        string $lastName,
        string $email,
        int $age,
        Role $role,
        bool $active = false,
    ): UserBuilderInterface 
    {
        $this->user = new User(
            firstName: $firstName, 
            lastName: $lastName,
            email: $email,
            age: $age,
            role: $role
        );

        return $this;
    }

    public function addAddress(
       string $street,
       string $city,
       string $state,
       string $postalCode,
       string $country,
    ): UserBuilderInterface
    {
        $address = new Address( 
            street: $street,
            city: $city, 
            state: $state,
            postalCode: $postalCode,
            country: $country
        );

        $this->user->setAddress($address);
        return $this;
    }

    public function addPhone( 
        string $ddd,
        string $number,
        ?bool $active = true,
    ): UserBuilderInterface
    {
        $phone = new Phone(
            ddd: $ddd,
            number: $number
        );

        $this->user->setPhone($phone);
        return $this;
    }

    public function build(): User
    {
        return $this->user;
    }
}
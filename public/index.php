<?php

use Core\Creational\Singleton\Practical\DbConnection;
use Core\Creational\Singleton\Practical\Singleton;

require_once '../vendor/autoload.php';

// use Core\Creational\Builder\Practical\Enums\Role;
// use Core\Creational\Builder\Practical\UserBuilder;

// $user = (new UserBuilder())
//     ->addBasicInfo( 
//         firstName: "Breno Felipe", 
//         lastName: "Gomes Cordeiro", 
//         email: "breno1808@outlook.com", 
//         age: 23, 
//         role: Role::F
//     )
//     ->addAddress(
//         street: "Rua Alva", 
//         city: "Belo Horizonte", 
//         state: "Minas Gerais", 
//         postalCode: "31744-560", 
//         country: "BR"
//     )
//     ->addPhone(
//         ddd: "31", 
//         number: "99593-8992")

//     ->build();

$instance = DbConnection::getInstance();
    DbConnection::getInstance();
    DbConnection::getInstance();
    DbConnection::getInstance();
    DbConnection::getInstance();
    DbConnection::getInstance();

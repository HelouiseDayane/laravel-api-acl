<?php

namespace App\DTO\Users;

class CreateUserDTO{

    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ){
        // Com a forma de DTO quando ou se for inserido mais alguma coluna,
        // Não precisarei ficar inserindo nem no model nem no Repositories, apenas aqui em cima
    }
}
<?php

namespace App\DTO\Users;

class CreateUserDTO{

    public function __construct(

        //essas propriedade vão ser violadas no prolongar do desenvolvimento por isso precisa do readonly
        readonly public string $name,
        readonly public string $email,
        readonly public string $password,
    ){
        // Com a forma de DTO quando ou se for inserido mais alguma coluna,
        // Não precisarei ficar inserindo nem no model nem no Repositories, apenas aqui em cima
    }
}
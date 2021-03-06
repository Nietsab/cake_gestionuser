<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword(string $p) : ?string {
        if(strlen($p) > 0){
            return (new DefaultPasswordHasher()->hash($p));
        }
    }
}

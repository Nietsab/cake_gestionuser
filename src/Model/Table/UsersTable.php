<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $c): void
    {
        parent::initialize($c);
        $this->addBehavior('Timestamp');

        $this->hasMany('Messages', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $v): Validator
    {
        $v->maxLength('login', 30)
            ->notEmptyString('login');

        return $v;
    }
}

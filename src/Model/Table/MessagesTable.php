<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MessagesTable extends Table
{
    public function initialize(array $c): void
    {
        parent::initialize($c);
        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignkey' => 'user_id',
            'jointype' => 'INNER'
        ]);
    }

    public function validationDefault(Validator $v): Validator
    {
        $v->notEmptyString('content');
        return $v;
    }
}

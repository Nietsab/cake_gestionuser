<?php

namespace App\Controller;

class UsersController extends AppController{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        //autorise l'action login et add de ce controller seulement
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }

    public function index(){

    }

    public function hidden(){

    }

    public function new(){

    }

    public function login(){
        if($this->request->is(['post'])){

            $res = $this->Authentication->getResult();

            if($res->isValid()){
                $this->Flash->success('Re');
                return $this->redirect(['controlelr' => 'Users', 'action' => 'index']);
            }else{
                $this->Flash->error('Tu t\'est trompé bg');
            }

        }
    }
}

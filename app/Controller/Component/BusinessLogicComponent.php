<?php

App::uses('Component', 'Controller');

class BusinessLogicComponent extends Component{
    
    public function login(){
        $user = $this->Auth->identify();
        if($user){
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
    
}
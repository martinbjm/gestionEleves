<?php
App::uses('AppModel', 'Model');
class Note extends AppModel
{
    /**
     * @var array
     * Permet la validation du champ de note pour verifier si
     * elle est bien entre 0 et 20
     */
    public $validate = array(
        'note'=> array(
            'rule'=>'checkNote',
            'message'=>'La note doit être comprise entre 0 et 20'
        )
    );

    public function checkNote($check){
        $valeur = array_values($check);
        $valeur = $valeur[0];
        return ($valeur>=0 && $valeur<=20);
    }

}
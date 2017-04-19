<?php
App::uses('AppModel', 'Model');
class Student extends AppModel
{
    /**
     * @var array
     * Permets une association entre les notes et l'élève
     */
    public $hasMany = array('Note'=>array('className' => 'Note','foreignKey' => 'student_id'));
    public $validate = array(
        'nom'=>array(
            'between'=> array(
                'rule'=>array('lenghtBetween',1,50),
                'message'=>'Entre 1 et 50 caractères'
            )
        ),
        'prenom'=>array(
            'between'=> array(
                'rule'=>array('lenghtBetween',1,50),
                'message'=>'Entre 1 et 50 caractères'
            )
        ),
        'dateNaissance'=>'date'
    );
}
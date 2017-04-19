<?php
App::uses('AppController', 'Controller');
class StudentsController extends AppController {

    /**
     * Affichage de la liste des élèves
     */
	public function index() {
	    $this->layout = 'my_layout';
		$this->set('students',$this->Student->find('all'));
	}

    /**
     * @param null $id id de l'élève
     * @return \Cake\Network\Response|null
     * Permet la modification d'un élève
     */
	public function modify($id=null){
        $this->layout = 'my_layout';
        if (!$id){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        $student = $this->Student->findById($id);
        if(!$student){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        if(empty($this->request->data)){
            $this->request->data = $student;
        }else{
            if($this->Student->save($this->request->data)){
                $this->Flash->success(__('L\'élève a bien été modifié.'));
                return $this->redirect(array('controller' => 'students','action' => 'index'));
            }
        }
    }

    /**
     * @return \Cake\Network\Response|null
     * Permet l'ajout d'un élève
     */
    public function add_student(){
        $this->layout = 'my_layout';
        if($this->request->is('post')){
            $this->Student->create();
            if($this->Student->save($this->request->data)){
                $this->Flash->success(__('L\'élève a été ajouté.'));
                return $this->redirect(array('controller' => 'students','action' => 'index'));
            }
        }
    }

    /**
     * @param null $id id de l'élève a supprimer
     * @return \Cake\Network\Response|null
     * Permet la suppression d'un élève
     */
    public function delete($id = null){
        $this->autoRender = false;
        if(!id){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        if($this->Student->delete($id)){
            $this->Flash->success(__('L\'élève a été supprimé.'));
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        return $this->redirect(array('controller' => 'students','action' => 'index'));
    }

    /**
     * @param null $id id de l'élève pour afficher ces notes
     * @return \Cake\Network\Response|null
     * Affiche les notes d'un élève
     */
    public function notes($id = null){
        $this->layout = 'my_layout';
        if(!$id){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        $student = $this->Student->findById($id);
        if(!$student){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        $this->set('student',$student);
    }

    /**
     * @param null $id id de l'élève
     * @return \Cake\Network\Response|null
     * Permet l'ajout d'une note
     */
    public function add_note($id = null){
        $this->layout = 'my_layout';
        $this->loadModel('Note');
        if(!$id){
            return $this->redirect(array('controller' => 'students','action' => 'index'));
        }
        if($this->request->is('post') && !empty($this->request->data)){
            $this->Note->create();
            if($this->Note->save($this->request->data)){
                $this->Flash->success(__('La note a été ajouté.'));
                return $this->redirect(array('controller' => 'students','action' => 'notes',$id));
            }
        }
        $this->set('student_id',$id);
    }
}
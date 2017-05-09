<?php 
class NotesController extends AppController{
    public $name = 'Notes';
	public $helpers = array('Html', 'Form');
	
	public function add() {  
    if($this->request->is('note') {  
        if($this->Note->save(($this->request->data)) {  
            $this->Session->setFlash('OK'):  
            $this->redirect(array('action' => 'index'));  
        } else {  
            $this->Session->setFlash('KO');  
        }  
    }  
}
?>
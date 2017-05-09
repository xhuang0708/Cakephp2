<?php 
class StudentsController extends AppController{
    public $name = 'Students';
	public $helpers = array('Html', 'Form');
	public function index() {  
	$allUsers = $this->Student->find ( 'all', array ( 
	'fields' => array ( 
	'Student.id', 'Student.name', 'Student.birthday', 'Note.subject' ,'Note.score'
	), 
	'order' => 'id DESC' ) ); 
	$this->set ( 'allUsers', $allUsers ); }  
	public function view($id = null) {  
    $this->Student->id = $id;  
    $this->set('student', $this->Student->read());  
}
public $components = array('Session');  
  
public function add() {  
    if($this->request->is('student') {  
        if($this->Student->save(($this->request->data)) {  
            $this->Session->setFlash('OK'):  
            $this->redirect(array('action' => 'index'));  
        } else {  
            $this->Session->setFlash('KO');  
        }  
    }  
}
function edit($id = null) {  
    $this->Student->id = $id;  
    if ($this->request->is('get')) {  
        $this->request->data = $this->Student->read();  
    } else {  
        if ($this->Student->save($this->request->data)) {  
            $this->Session->setFlash('Your student has been updated.');  
            $this->redirect(array('action' => 'index'));  
        } else {  
            $this->Session->setFlash('Unable to update your student.');  
        }  
    }  
}
function delete($id) {  
    if ($this->request->is('get')) {  
        throw new MethodNotAllowedException();  
    }  
    if ($this->Student->delete($id)) {  
        $this->Session->setFlash('The student with id: ' . $id . ' has been deleted.');  
        $this->redirect(array('action' => 'index'));  
    }  
}
}
}
?>
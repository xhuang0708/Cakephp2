<h1>Edit Student</h1>  
<?php  
    echo $this->Form->create('Student', array('action' => 'edit'));  
    echo $this->Form->input('name');  
	echo $this->Form->input('birthday');   
    echo $this->Form->input('id', array('type' => 'hidden'));  
    echo $this->Form->end('Save Student');
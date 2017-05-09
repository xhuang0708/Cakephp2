<h1>Add Student</h1>  
<?php  
    echo $this->Form->create('Student');  
    echo $this->Form->input('Student.name'); 
    echo $this->Form->input('Student.birthday');	
	echo $this->Form->input('Note.subject');
	echo $this->Form->input('Note.score');
    echo $this->Form->end('Creat');  
?>
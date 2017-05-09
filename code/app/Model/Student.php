class Student extends AppModel {  
    public $name = ¡®Student' 
    var $uses = array ( 'Student', 'Note' );	
	public $validate = array(  
    'name' => array(  
        'rule' => 'notEmpty' 
        'isUnique'=>true		
    ),  
    'birthday' => array(  
        'rule' => 'notEmpty'  
    ) 
	);
	public $hasMany = array(  
        'Note' => array(  
            'className' => 'Note',   
            'conditions' => 'Note.status = 1',   
            'order' => 'Note.created DESC',   
            'limit' => '5',   
            'foreignKey' => 'student_id',   
            'dependent' => true,   
            'exclusive' => false, 'finderQuery' => ''  
        )  
);
}
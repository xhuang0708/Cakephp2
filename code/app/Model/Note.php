<?php
class Note extends AppModel {
    public $name = 'Note';
    public $validate = array (
            'subject' => array (
                    'rule' => array (
                            'subject',
                            true 
                    ) 
            ) 
    );
	public $validate = array (
            'score' => array (
                    'rule' => array (
                            'score',
                            true 
                    ) 
            ) 
    );
}
?> 
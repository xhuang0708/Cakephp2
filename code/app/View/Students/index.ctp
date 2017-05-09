<h1>Students</h1>  
<table>  
    <tr>  
        <th>Id</th>  
        <th>name</th>  
        <th>Birthday</th>  		
    </tr>  
  </table>
  
    <?php foreach ($students as $student): ?>  
    <tr>  
        <td><?php echo $student['Student']['id']; ?></td>  
        <td><?php echo $student['Student']['name']; ?></td>  
		<td>  
            <?php echo $this->Html->link($student['Student']['name'],  
array('controller' => 'students', 'action' => 'view', $student['Student']['id'])); ?>  
        </td>  
		<td><?php echo $student['Student']['birthday']; ?></td> 
    </tr>  
    <?php endforeach; ?>  
	
	<h1>Students</h1>  
    <p><?php echo $this->Html->link("Add Student", array('action' => 'add')); ?></p>  
    <table>  
        <tr>  
            <th>Id</th>  
            <th>Name</th>  
            <th>Birthday</th>   
        </tr>    
   
        <?php foreach ($students as $student): ?>  
        <tr>  
            <td><?php echo $student['Student']['id']; ?></td>  
            <td>  
                <?php echo $this->Html->link($student['Student']['name'], array('action' => 'view', $student['Student']['id']));?>  
            </td>  
            <td>  
                <?php echo $this->Html->link('Edit', array('action' => 'edit', $student['Student']['id']));?>  
            </td>  
            <td>  
                <?php echo $student['Student']['birthday']; ?>  
            </td>  
        </tr>  
        <?php endforeach; ?>  
    </table>

	<h1>Students</h1>  
<p><?php echo $this->Html->link('Add Student', array('action' => 'add')); ?></p>  
<table>  
    <tr>  
        <th>Id</th>  
        <th>Name</th>  
		<th>Birthday</th>
    </tr>  
</table> 
   
    <?php foreach ($students as $student): ?>  
	<table>
    <tr>  
        <td><?php echo $student['Student']['id']; ?></td>  
        <td>  
            <?php echo $this->Html->link($student['Student']['name'], array('action' => 'view', $student['Student']['id']));?>  
        </td>  
        <td>
            <?php echo $this->Form->postLink(  
                'Delete',  
                array('action' => 'delete', $student['Student']['id']),  
                array('confirm' => 'Are you sure?'));  
            ?>  
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $student['Student']['id']));?>  
        </td>  
        <td>  
            <?php echo $student['Student']['birthday']; ?>  
        </td>  
    </tr>  
    <?php endforeach; ?>  
  </table>
  
  <h1>Notes</h1>  
  <?php foreach ($notes as $note): ?> 
<p><?php echo $this->Html->link('Add Note', array('action' => 'add')); ?></p>  
<table>  
    <tr>  
        <th>Subject</th>  
        <th>Score</th>  
    </tr>  
</table> 
<?php echo $this->Html->css('layout'); ?>
<?php echo $this->Form->create('Student',array("url" => "add_student"));?>
<?php echo $this->Form->submit('Ajouter',array('div'=>false,'formaction' => Router::url(array('controller' => 'students','action' => 'add_student')),'class'=>'right inline')); ?>
<?php echo $this->Form->end() ?>
<h3 class='inline'>Liste des élèves</h3>
<table>
    <thead>
        <tr>
            <td><h3>Nom</h3></td>
            <td><h3>Prénom</h3></td>
            <td><h3>Date de naissance</h3></td>
            <td><h3>Notes</h3></td>
            <td><h3>Gestion</h3></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($students as $student):?>
    <tr>
        <td><?php echo $student['Student']['nom']; ?></td>
        <td><?php echo $student['Student']['prenom']; ?></td>
        <td><?php echo $student['Student']['dateNaissance']; ?></td>
        <td><?php echo $this->Html->link('Voir..',array( 'controller'=>'students', 'action'=>'notes', $student['Student']['id'])); ?></td>
        <td>
            <?php echo $this->Html->link('Modifier..',array( 'controller'=>'students', 'action'=>'modify', $student['Student']['id'])); ?>
            <?php echo $this->Html->link('Supprimer..',array( 'controller'=>'students', 'action'=>'delete', $student['Student']['id'])); ?>
        </td>
    </tr>
<?php endforeach;
unset($students);?>
    </tbody>
</table>
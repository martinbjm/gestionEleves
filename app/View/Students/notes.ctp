<?php echo $this->Html->css('layout'); ?>
<?php echo $this->Html->link('Retour',array('controller'=>'students','action'=>'index'),array('class'=>'right inline')); ?>
<h3 class='inline'>Notes de <?php echo $student['Student']['nom'].' '.$student['Student']['prenom']; ?></h3>
<table>
    <thead>
        <tr>
            <td><h3>Matière</h3></td>
            <td><h3>Note</h3></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($student["Note"] as $note): ?>
        <tr>
            <td><?php echo $note["matiere"]; ?> </td>
            <td><?php echo $note["note"]; ?> </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->Form->create('Student',array("url" => "index"));?>
<?php echo $this->Form->submit('Ajouter',array('div'=>false,'formaction' => Router::url(array('controller' => 'students','action' => 'add_note', $student['Student']['id'])),'class'=>'inline')); ?>
<?php echo $this->Form->end() ?>
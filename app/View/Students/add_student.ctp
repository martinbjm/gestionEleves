<?php echo $this->Html->css('layout'); ?>
<?php echo $this->Form->create('Student',array("url" => "add_student"));?>
<?php echo $this->Html->link('Retour',array('controller'=>'students','action'=>'index'),array('class'=>'right inline')); ?>
<h3 class='inline'>Ajouter un élève</h3>
<?php echo $this->Form->input('nom');?>
<?php echo $this->Form->input('prenom');?>
<?php echo $this->Form->input('dateNaissance');?>
<?php echo $this->Form->end('Ajouter');?>
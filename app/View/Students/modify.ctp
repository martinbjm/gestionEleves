<?php echo $this->Html->css('layout'); ?>
<?php echo $this->Form->create('Student');?>
<?php echo $this->Form->submit('Retour',array('div'=>false,'formaction' => Router::url(array('controller' => 'students','action' => 'index')),'class'=>'right inline')); ?>
<h3 class='inline'>Modifier un élève</h3>
<?php echo $this->Form->input('nom');?>
<?php echo $this->Form->input('prenom');?>
<?php echo $this->Form->input('dateNaissance');?>
<?php echo $this->Form->input('id');?>
<?php echo $this->Form->end('Modifier');?>
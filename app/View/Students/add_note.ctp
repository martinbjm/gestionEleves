<?php echo $this->Html->css('layout'); ?>
<?php echo $this->Form->create('Note',array('url' => 'add_note/'.$student_id));?>
<?php echo $this->Html->link('Retour',array('controller'=>'students','action'=>'notes',$student_id),array('class'=>'right inline')); ?>
<h3 class='inline'>Ajouter une note</h3>
<?php echo $this->Form->input('matiere');?>
<?php echo $this->Form->input('note');?>
<?php echo $this->Form->input('student_id',array('type'=>'hidden','value'=>$student_id));?>
<?php echo $this->Form->end('Ajouter');?>
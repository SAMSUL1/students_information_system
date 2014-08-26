<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Acievements'), array('controller' => 'acievements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acievement'), array('controller' => 'acievements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Behaviors'), array('controller' => 'behaviors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Behavior'), array('controller' => 'behaviors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detentions'), array('controller' => 'detentions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detention'), array('controller' => 'detentions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Addresses'), array('controller' => 'student_addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Address'), array('controller' => 'student_addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Events'), array('controller' => 'student_events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Event'), array('controller' => 'student_events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Student Loans'), array('controller' => 'student_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Loan'), array('controller' => 'student_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transcripts'), array('controller' => 'transcripts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transcript'), array('controller' => 'transcripts', 'action' => 'add')); ?> </li>
	</ul>
</div>

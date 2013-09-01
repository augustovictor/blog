<h2> Posts </h2>

<?php echo $this->Html->link('Add post', array('action' => 'add')); ?>

<table>
	<thead>
		<tr>
			<th> Id </th>
			<th> Title </th>
			<th> Created </th>
			<th> Actions </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>		
			<tr>
				<td> <?php echo $post['Post']['id']; ?> </td>
				<td> <?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?> </td>
				<td> <?php echo $post['Post']['created']; ?> </td>
				<td> 
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> 
					<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		<?php unset($post); ?>
	</tbody>
</table>
<?php
	echo $this->Form->create('Attribute', array('id' => 'Attribute' . '_' . $object['id'] . '_last_seen_form', 'url' => '/attributes/editField/' . $object['id']));
?>
<?php
	$current = 0;
	if ($object['to_ids']) $current = 1;
	echo $this->Form->input('last_seen', array(
			'label' => false,
			'value' => 0,
			'id' => 'Attribute' . '_' . $object['id'] . '_last_seen_field',
			'div' => false
	));
	echo $this->Form->end();
?>
</div>

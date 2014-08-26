<div class="row">
    <div class="col-md-10">
        <div class="userGroupPermissions form">
            <?php
echo $this->Form->create('UserGroupPermission', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => ''
));
?>
            <fieldset>
                <legend><?php echo __('Edit User Group Permission'); ?></legend>
                	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_group_id');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
		echo $this->Form->input('allowed');
	?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list nav-stacked">
                                            <li><?php echo $this->Form->postLink(__('<i class="icon icon-trash"></i> Delete'), array('action' => 'delete', $this->Form->value('UserGroupPermission.id')),array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('UserGroupPermission.id'))); ?></li>
                                        <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List User Group Permissions'), array('action' => 'index'),array('escape'=>false)); ?></li>
                    		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List User Groups'), array('controller' => 'user_groups', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New User Group'), array('controller' => 'user_groups', 'action' => 'add'),array('escape'=>false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

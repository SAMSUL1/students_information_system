<div class="row">
    <div class="col-md-10">
        <div class="ratings form">
            <?php
echo $this->Form->create('Rating', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => ''
));
?>
            <fieldset>
                <legend><?php echo __('Edit Rating'); ?></legend>
                	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('set_id');
		echo $this->Form->input('rating');
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
                                            <li><?php echo $this->Form->postLink(__('<i class="icon icon-trash"></i> Delete'), array('action' => 'delete', $this->Form->value('Rating.id')),array('escape'=>false), __('Are you sure you want to delete # %s?', $this->Form->value('Rating.id'))); ?></li>
                                        <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Ratings'), array('action' => 'index'),array('escape'=>false)); ?></li>
                    		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Users'), array('controller' => 'users', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New User'), array('controller' => 'users', 'action' => 'add'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Sets'), array('controller' => 'sets', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Set'), array('controller' => 'sets', 'action' => 'add'),array('escape'=>false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>

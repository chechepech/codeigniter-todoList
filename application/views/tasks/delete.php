<div class="center">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><?php echo $page_heading; ?></h2>
        </div>
        <p class="lead"><?php echo $this->lang->line('delete_confirm_message');?></p>
        <div class="panel-body">
        <?php echo form_open('tasks/delete'); ?>
            <?php if (validation_errors()) : ?>
                <h3>Whoops! There was an error:</h3>
                <p><?php echo validation_errors(); ?></p>
            <?php endif; ?>
            <?php foreach ($query->result() as $row) : ?>
                <?php echo $row->task_desc; ?>
                <br /><br />
        </div>
        <div class="panel-footer">
                <?php echo form_submit('submit', $this->lang->line('common_form_elements_action_delete'), 'class="btn btn-default"'); ?>
                or <?php echo anchor('tasks',$this->lang->line('common_form_elements_cancel'));?>
                <?php echo form_hidden('id', $row->task_id); ?>
            <?php endforeach; ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<div class="page-header">
	<h1 class="text-center">TO-DO LIST</h1>
	<?php echo form_open('tasks/index'); ?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php echo form_error('task_desc'); ?>
			<div class="input-group">
				<input type="text" class="form-control" name="task_desc" placeholder="<?php echo $this->lang->line('tasks_add_task_desc'); ?>" required>
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><?php echo $this->lang->line('tasks_add_task'); ?></button>
				</span>
				</div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">
						<div class="row">
							<div class="form-group">
								<div class="col-lg-4">
									<?php echo form_error('task_due_d'); ?>
									<select name="task_due_d" class="form-control">
										<option value="0" selected>Select Day</option>
										<?php for ( $i = 1; $i <= 31; $i++) : ?>
										<!--int mktime($hour, $minute, $second, $month, $day, $year, $is_dst)-->
										<!-- j - The day of the month without leading zeros (1 to 31) -->
										<!-- S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th) -->
										<option value="<?php echo $i; ?>"><?php echo date('jS', mktime(0,0,0,0, $i, date('Y'))) ; ?></option>
										<?php endfor; ?>
									</select>
								</div>
								<div class="col-lg-4">
									<?php echo form_error('task_due_m'); ?>
									<select name="task_due_m" class="form-control">
										<option value="0" selected>Select Month</option>
										<?php for ( $i = 1; $i <= 12; $i++) : ?>
										<!--int mktime($hour, $minute, $second, $month, $day, $year, $is_dst)-->
										<!--F - a full textual representation of a month (January through December)-->
										<option value="<?php echo $i; ?>"><?php echo date('F', mktime(0,0,0,$i, 1, date('Y'))) ; ?></option>
										<?php endfor ; ?>
									</select>
								</div>
								<div class="col-lg-4">
									<?php echo form_error('task_due_y'); ?>
									<select name="task_due_y" class="form-control">
										<option value="0000" selected>Select Year</option>
										<?php for ($i = date("Y",strtotime(date("Y"))); $i <= date("Y",strtotime(date("Y").' +5 year')); $i++) : ?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor ; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close() ; ?>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<table class="table table-hover">
						<?php foreach ($query->result() as $row) : ?>
						<?php if (date("Y-m-d",mktime(0, 0, 0, date('m'), date('d'), date('y'))) > $row->task_due_date) {echo '<tr class="list-group-item-warning">';} ?>
							<?php if ($row->task_due_date == null) {echo ' <tr>';} ?>
								<td width="80%"><?php if ($row->task_status == 'done') {echo '<strike>'.$row->task_desc.'</strike>' ;} else {echo $row->task_desc;} ?>							
								</td>
								<td width="10%">
									<?php if ($row->task_status == 'todo') {echo anchor ('tasks/status/done/'.$row->task_id, 'It\'s Done');} ?>
									<?php if ($row->task_status == 'done') {echo anchor ('tasks/status/todo/'.$row->task_id, 'Still Todo');} ?>
								</td>
								<td width="10%"><?php echo anchor ('tasks/delete/'.$row->task_id, $this->lang->line('common_form_elements_action_delete')) ; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</table>
					</div>
			</div>
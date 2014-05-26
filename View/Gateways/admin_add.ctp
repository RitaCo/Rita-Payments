<?php
$this->extendView();
$this->Html->addCrumb('سرویس های ریتا','cp.services');
$this->Html->addCrumb($titlePlugin,'cp.fs');
$this->Html->addCrumb($titleController,'cp.fs.fonts');
$this->Html->addCrumb($titleAction);

$years = array();
for($i=1350;$i<=1410;$i++){
	$years[$i] = $i;
}

?>




<div class="wid-panel-framed brCorner-sm">
	<div class="panel-header">
		<div class="header-caption"><?= $titleAction; ?></div>
	</div>
	<div class="panel-body">
		<?= $this->Form->create('Fontstore.Font'); ?>
		<div class="body-container padding-none">

			<?= $this->Form->input('Font.name',array(
					'label' => 'نام فونت',
					'dir' => 'ltr'
			)); ?>
			
			<?= $this->Form->input('Font.title',array(
					'label' => 'عنوان',
					
			)); ?>
			<div class="form-col">
				<?= $this->Form->input('designer_id',array(
					'label' => 'طراح فونت',
					'empty' => array( null => 'نامشخص')
				)); ?>		
				<?= $this->Form->input('category_id',array(
					'label' => 'دسته بندی',
					'empty' => '[انتخاب کنید]',
					
				)); ?>	
			</div>
			<div class="form-col">
				<?= $this->Form->input('start_design',array(
					'label' => 'تاریخ شروع',
					'type' => 'text',
					'maxlength' => 4,
					
				)); ?>		
				<?= $this->Form->input('finish_design',array(
					'label' => 'تاریخ اتمام',
					'type' => 'text',
					'maxlength' => 4,
					
					
				)); ?>	
			</div>			
			<?= $this->Form->input('ordered_by',array(
					'label' => 'سفارش دهنده',
					
			)); ?>	
			<?= $this->Form->input('description',array(
					'label' => 'توضیح کوتاه',
						'form' => 'form-v'	
			)); ?>		
			<?= $this->Form->input('about',array(
					'label' => 'توضیحات کامل',
						'form' => 'form-v'	
			)); ?>		
			<?= $this->Form->input('slug',array(
					'label' => 'نامک',
					'dir' => 'ltr'
			)); ?>
	
		</div>
		<div class="body-footer">
			<?= $this->Html->link('بازگشت',array('action' => 'index'), array('class' => 'btn')); ?>
			<?= $this->Form->submit('ذخیره شود'); ?>
		</div>
		<?= $this->Form->end(); ?>
	</div>
</div>
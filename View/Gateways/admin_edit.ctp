<?php
$this->extendView();
$this->Html->addCrumb('سرویس های ریتا','cp.services');
$this->Html->addCrumb($titlePlugin,'cp.fs');
$this->Html->addCrumb($titleController,'cp.fs.members');
$this->Html->addCrumb($titleAction);
?>




<div class="wid-panel-framed brCorner-sm">
	<div class="panel-header">
		<div class="header-caption"><?= $titleAction; ?></div>
	</div>
	<div class="panel-body">
		<?= $this->Form->create('Fontstore.Member'); ?>
		<div class="body-container padding-none">
		<div class="form-col">
			<?= $this->Form->input('fullname_fa',array(
					'label' => 'نام کامل«فارسی»'
			)); ?>
			
			<?= $this->Form->input('fullname_en',array(
					'label' => 'نام کامل«لاتین»',
					'dir' => 'ltr'
			)); ?>
		</div>
			<div class="form-col">
				<?= $this->Form->input('email',array(
					'label' => 'ایمیل',
					'dir' => 'ltr'
				)); ?>		
				<?= $this->Form->input('website',array(
					'label' => 'وبسایت',
					'default' => 'http://',
					'dir' => 'ltr'
				)); ?>	
			</div>
			<div class="com-input">
				<div class="input-container">
					<label>این پروفایل می تواند در لیست‌های زیر جای گیرد:</label>
				</div>
			</div>
			<div class="form-col">
	
				<?= $this->Form->input('is_designer',array(
						'label' => 'طراح فونت'
				)); ?>
				<?= $this->Form->input('is_descriptor',array(
						'label' => 'مهندس فونت'
				)); ?>
				<?= $this->Form->input('is_vendor',array(
						'label' => 'فروشنده فونت'
				)); ?>
		
				<?= $this->Form->input('is_manufacturer',array(
						'label' => 'صاحب امتیاز'
				)); ?>
		
				<?= $this->Form->input('is_foundry',array(
						'label' => 'ارائه دهنده'
				)); ?>
				
			</div>
			<?= $this->Form->input('about',array(
					'label' => 'درباره «بیوگرافی - سوابق»',
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
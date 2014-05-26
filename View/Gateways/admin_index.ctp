<?php
$this->extendView();
$this->Html->addCrumb('کنترل','cp.services');
$this->Html->addCrumb($titlePlugin,'cp.fs');

$this->Html->addCrumb($titleAction);
?>






<div class="wid-panel-framed">
	<div class="panel-header">
		<div class="header-caption">فهرست فونتها</div>
	</div>
	<div class="panel-body">
		<div class="body-header padding-none">
			<div class="wid-toolbar">
				<div class="toolbar-band ">
					<?= $this->Html->linkIcon(' icon-circleadd',array('cp.fs.fonts','action' => 'add'),array('class' => 'btn')); ?>
				</div>
			</div>
		</div>	
		<div class="body-container">
			<?php
				$this->DataGrid->addColumn(
					'شناسه',
					'Font.id',
					array(
						'htmlAttributes' => array('width' => '20px')
						
					)
				);
				$this->DataGrid->addColumn(
					'نام فارسی', 
					'Font.name',
					array(
						'sort' => true,
						//'htmlAttributes' => array('width' => '200px')	
					)
				);
				$this->DataGrid->addColumn(
					'نام لاتین', 
					'Font.title',
					array(
					'sort' => true,
					//'htmlAttributes' => array('width' => '200px') 
						
					)
				);
				
				$this->DataGrid->addColumn(
					'دسته', 
					'Category.title',
					array(
						'sort' => true,
						'htmlAttributes' => array('width' => '100px') 
					)
				);				


				$this->DataGrid->addColumn(
					'گروه ها', 
					null,
					array(
						'type' => 'user_defined',
						'htmlAttributes' => array('width' => '200px'),
						'callback' => function ($data) {
							$groups = array(
								'is_designer' => 'طراح',
								'is_descriptor' => 'مهندس فونت',
								'is_manufacturer' => 'صاحب امتیاز',
								'is_vendor' => 'فروشنده',
								'is_foundry' => 'ارائه دهنده'
							);
							foreach($groups as $key => $val){
								if(!$data['Member'][$key]) {
									unset($groups[$key]);
								}
							}
							//return '<p>'.implode('</p><p>',$groups).'</p>';
							return implode('-',$groups);
						} 
						
					)
				);			
				$this->DataGrid->addColumn(
					'عملیات',
					 null,
					 array(
					 	'type' => 'actions',
					 	'htmlAttributes' => array('width' => '200px') 
					 )
				 );
				$this->DataGrid->addAction('ویرایش', 
					array('action' => 'edit'), 
					array('Font.id'),
					array('class' => 'btn btn-rounded btn-small btn-action')
				);
				$this->DataGrid->addAction('حذف', 
					array('action' => 'delete'), 
					array('Font.id'),
					array(
						'class' => 'btn btn-rounded btn-small btn-caution',
						'post' => true
					),
					'آیا اطمینان کامل دارید؟'
				);
				echo $this->DataGrid->generate($fonts);
 
			?>		
		
		</div>	
	</div>

</div>
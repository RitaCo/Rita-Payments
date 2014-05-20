<?php

 
RitaRouter::isStation('admin',function() {
	
	RitaEvent::on('Rita.doshboard',function($event){
		$name = $event->data['name'];
		switch ($name) {
			case 'welcome':
				//$event->result[] = 'UserManager.dashboard-report';
				break;
			case 'ritaServicePanel':
			case 'Payemts':
				$event->result['Payemts'] = array(
					'title'=> 'مدیریت فونت',
					'icon'	=> 'user-icon-people18',
					'order' => 1,
					'items' => array(
						array(
							'title' => 'فونت ها',
							'icon'	=> ' icon-fontcase',
							'url'	=> 'cp.fs.fonts'
						),
						array(
							'title' => 'فایل',
							'icon'	=> ' icon-importfile',
							'url'	=> 'cp.fs.files'
						),
						array(
							'title' => 'پروفایل طراحان',
							'icon'	=> 'icon-design',
							'url'	=> 'cp.fs.members'
						),						
						array(
							'title' => 'دسته بندی',
							'icon'	=> 'icon-stacks',
							'url'	=> 'cp.fs.cats'
						)						
	 
						
					)
				);
				break;
		}
	});





});
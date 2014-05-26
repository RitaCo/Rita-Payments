<?php

if (!defined('PAYMENTS_DIR')) {
	define('PAYMENTS_DIR', (dirname(dirname(__FILE__))) . DS );
}

// load RitaPayment Class 
include PAYMENTS_DIR . 'Lib' . DS . 'RitaPayment.php';

 
 RitaRouter::isStation('admin',function() {
	
	RitaEvent::on('Rita.doshboard',function($event){
		$name = $event->data['name'];
		switch ($name) {
			case 'welcome':
				//$event->result[] = 'UserManager.dashboard-report';
				break;
			case 'ritaControlPanel':
			case 'Payemts':
				$event->result['Payemts'] = array(
					'title'=> 'مدیریت پرداخت',
					'icon'	=> 'icon-dollarsquare',
					'order' => 1,
					'items' => array(
						array(
							'title' => 'پرداخت ها',
							'icon'	=> 'icon-dollar',
							'url'	=> 'cp.fs.members'
						),						
						array(
							'title' => 'دروازه‌های پرداخت',
							'icon'	=> ' icon-mergethree',
							'url'	=> 'cp.pay.gateways'
						)						
	 
						
					)
				);
				break;
		}
	});





});